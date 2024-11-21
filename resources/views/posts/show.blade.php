@extends('layouts.app')

@section('title')
    Blog | View Post
@endsection

@section('content')
    <div class="container py-5">
        <div class="post-image mb-4">
            <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="img-fluid rounded">
        </div>
        <div class="post-details">
            <h3>{{ $post->title }}</h3>
            <p><strong>Description:</strong> <br> {{ $post->description }}</p>
            <p><small>Created At: {{ $post->created_at->format('M d, Y') }}</small></p>
        </div>
        <div class="return-link mt-4">
            <a href="{{ route('posts.allPosts') }}" class="btn btn-secondary">Return to Posts Page</a>
        </div>
    </div>
@endsection