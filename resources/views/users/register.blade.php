<!DOCTYPE html>
<html lang="en">
<head>
    {{-- bootstrap link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- style --}}
    <link rel="stylesheet" href="{{ asset('style/login.css') }}">
    <title>Register</title>
</head>
<body>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('users.store')}}" method="POST">
            @csrf
            <h2><b>Register</b></h2>
            <div class="field">
                <label for="">First Name</label>
                <input type="text" name="f_name" id="">
            </div>
            <div class="field">
                <label for="">Last Name</label>
                <input type="text" name="l_name" id="">
            </div>
            <div class="field">
                <label for="">Email</label>
                <input type="email" name="email" id="" placeholder="example@gmail.com">
            </div>
            <div class="field">
                <label for="">Passowrd</label>
                <input type="password" name="password" id="">
            </div>
            <input type="submit" value="Register">
            <div class="link">
                Already have account ? 
                <a href="{{route('users.login')}}">Login</a>
            </div>
        </form>
    </div>
</body>
</html>