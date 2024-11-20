<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Bootstrap Link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('style/home.css') }}">
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Blog App</a>
            <div class="ms-auto d-flex align-items-center">
                <a href="{{ route('users.login') }}" class="btn btn-outline-light me-2">Login</a>
                <a href="{{ route('users.register') }}" class="btn btn-outline-light">Register</a>
            </div>
        </div>
    </nav>

    <!-- Main Content Section -->
    <div class="container py-5">
        <div class="row g-4">
            <!-- Right Post Section -->
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <img src="{{ asset('welcome.jpg') }}" class="card-img-top" alt="welcome-image">
                    <div class="card-body">
                        <h5 class="card-title">Welcome to Our Blog!</h5>
                        <p class="card-text">Start exploring a world of amazing topics and share your thoughts with like-minded individuals. Create posts that inspire and engage the community.</p>
                    </div>
                </div>
            </div>

            <!-- Left Post Section -->
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <img src="{{ asset('community.jpg') }}" class="card-img-top" alt="community-image">
                    <div class="card-body">
                        <h5 class="card-title">Join Our Community</h5>
                        <p class="card-text">Connect with passionate individuals and expand your knowledge. Become part of a vibrant community that fosters creativity, learning, and collaboration.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="text-center py-5 bg-light">
        <h3>What Are You Waiting For?</h3>
        <p>Join our growing community of bloggers today and start sharing your ideas!</p>
        <a href="{{ route('users.login') }}" class="btn btn-primary btn-lg">Join Now</a>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Blog App. Developed by <span class="fw-bold">Mohamed Talibi</span></p>
    </footer>

</body>
</html>
