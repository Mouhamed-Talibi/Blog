<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Bootstrap Link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Posts</title>
    {{-- Custom Style --}}
    <link rel="stylesheet" href="{{asset('style/allPosts.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Blog Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('posts.dashboard')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('posts.create')}}">Create Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('posts.myPosts')}}">My Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('posts.allPosts')}}">All Posts</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{route('users.logout')}}" method="POST" class="nav-link p-0">
                            @csrf
                            <button type="submit" class="btn btn-link text-white" onclick="return confirm('Are you sure you want to logout?')">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Creator</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>                        
                        <td>{{Str::limit($post->description, 100)}}</td>
                        <td>
                            <img src="{{asset('storage/' . $post->image)}}" alt="">
                        </td>
                        <td>{{$post->creator->f_name}} {{$post->creator->l_name}}</td>
                        <td>
                            <a href="{{route('posts.show', $post->id)}}" id="showPost">Show</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Blog App. Developed by <span class="fw-bold">Mohamed Talibi</span></p>
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>
</html>
