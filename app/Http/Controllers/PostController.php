<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class PostController extends Controller
{
    public function createAction(){
        $user = auth()->user();
        return view('posts.create', compact('user'));
    }

    public function storeAction(){
        // validate data
        request()->validate([
            'title'=>['required', 'max:50'],
            'description'=>['required'],
            'image'=>['required'],
            'creator_id'=>['required', 'exists:users,id']
        ]);
        // handle uploaded image
        $imagePath = request()->file('image')->store('uploads', 'public');
        // new post
        $post = new Post();
        $post->title = request('title');
        $post->description = request('description');
        $post->image = $imagePath;
        $post->creator_id = request('creator_id');
        // save
        $post->save();
        // redirect user :
        return redirect()->route('posts.myPosts');
    }

    public function myPostsAction(){
        $user = auth()->user();
        $posts = Post::where('creator_id', $user->id)->get();
        return view('posts.myPosts', compact('posts'));
    }

    public function allPostsAction(){
        $posts = Post::with('creator')->get();
        return view('posts.allPosts', compact('posts'));
    }

    public function showAction($postId){
        $post = Post::findOrFail($postId);
        return view('posts.show', compact('post'));
    }
}
