<!DOCTYPE html>
<html lang="en">
<head>
    {{-- bootstrap link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editing post</title>
    {{-- style --}}
    <link rel="stylesheet" href="{{asset('style/createPost.css')}}">
</head>
<body>
    <nav>
        <b>Blog Dashboard</b>
        <div class="links">
            <div class="link">
                <a href="{{route('posts.dashboard')}}">Home</a>
            </div>
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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="field">
                <label for="">Post Title</label>
                <input type="text" name="title" id="" value="{{$post->title}}">
            </div>
            <div class="field">
                <label for="">Post Description</label>
                <textarea name="description" id="" cols="30" rows="10">
                    {{$post->description}}
                </textarea>
            </div>
            <div class="field">
                <label for="">Post Image</label>
                <input type="file" name="image" id="" value="{{$post->image}}">
            </div>
            <div class="field">
                <input type="hidden" name="creator_id" id="" value="{{$post->creator_id}}">
            </div>
            <input type="submit" value="Update">
        </form>
    </div>

    <div class="developer">
        Developed By <span>Mohamed Talibi</span>
    </div>
</body>
</html>