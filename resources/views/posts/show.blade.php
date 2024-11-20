<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Bootstrap Link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post  | {{$post->title}}</title>
    {{-- Custom Style --}}
    <link rel="stylesheet" href="{{asset('style/show.css')}}">
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
        </div>
        <div class="link">
            <form action="{{route('users.logout')}}" method="POST">
                @csrf
                <button type="submit" name="logout" onclick="confirm('Are sure you want to logout?')">Logout</button>
            </form>
        </div>
    </nav>

    <div class="container">
        <div class="post-image">
            <img src="{{asset('storage/' . $post->image)}}" alt="post-image">
        </div>
        <div class="details">
            <b>About : </b> {{$post->title}}
            <br><br>
            <b>Description : </b> 
            <br>
            {{$post->description}}
            <small>Created At : </small> {{$post->created_at}}
        </div>
        <div class="link-my-posts">
            <a href="{{route('posts.myPosts')}}">Return to my posts</a>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Blog App. Developed by <span class="fw-bold">Mohamed Talibi</span></p>
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>
</html>
