<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function homeAction(){
        return view('home');
    }

    public function loginAction(){
        return view('users.login');
    }

    public function handleLogin(){
        // validate the data
        request()->validate([
            'email'=>['required', 'max:100'],
            'password'=>['required']
        ]);
        // check if user exists : 
        $user = User::where('email', request()->email)->first();
        // if user and password correct 
        if($user && Hash::check(request()->password, $user->password)){
            Auth::login($user);
            // redirect user
            return redirect()->route('posts.dashboard');
        }
        else{
            return back()->withErrors(['email'=>'Email Not Exist Or', 'password'=> "Pasword Incorrect !"])->withInput();
        }
    }

    public function registerAction(){
        return view('users.register');
    }

    public function storeUserAction(){
        // Validate the data
        request()->validate([
            'f_name' => ["required", "max:30"],
            'l_name' => ["required", "max:30"],
            'email' => ["required", "email", "unique:users,email"],
            'password' => ["required", "min:8", "max:150"],
        ]);

        // Create and store the user
        $user = new User();
        $user->f_name = request()->f_name;
        $user->l_name = request()->l_name;
        $user->email = request()->email;
        $user->password = Hash::make(request()->password);

        $saved = $user->save();
        // Redirect to login page on success or back to register page on failure
        if ($saved) {
            return redirect()->route('users.login');
        } else {
            return redirect()->route('users.register');
        }
    }

    public function dashboardAction(){
        if(!Auth::check()){
            return redirect()->route('users.login');
        }
        $user = auth()->user();
        return view('posts.dashboard', compact('user'));
    }

    public function logoutAction(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        // Clear the session cookie
        $cookie = cookie('laravel_session', '', -1);
        if($cookie){
            return redirect()->route('users.login');
        }
        else{
            return redirect()->route('posts.dashboard');
        }
    }
}
