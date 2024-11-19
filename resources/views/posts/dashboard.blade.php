<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- style --}}
    <link rel="stylesheet" href="{{asset('style/dashboard.css')}}">
    <title>dashboard</title>
</head>

<body>
    <nav>
        <b>Blog Dashboard</b>
        <div class="links">
            <div class="link">
                <a href="{{route('posts.create')}}">Create Post</a>
            </div>
            <div class="link">
                <a href="{{route('posts.myPosts')}}">My Posts</a>
            </div>
            <div class="link">
                <a href="{{route('posts.allPosts')}}">All Posts</a>
            </div>
        </div>
        <div class="link">
            <form action="{{route('users.logout')}}" method="POST">
                @csrf
                <button type="submit" name="logout" onclick="confirm('Are sure you want to logout?')">Logout</button>
            </form>
        </div>
    </nav>

    <div class="container">
        <p>Welcome Back <b>{{ $user->f_name }} {{ $user->l_name }}</b></p>
        <p>
            Feel Free to
        </p>
        <div class="accessLinks">
            <a href="{{route('posts.create')}}">Create New Post</a>
            <a href="{{route('posts.myPosts')}}">Take A Look At Your Posts</a>
        </div>
    </div>
</body>
</html>