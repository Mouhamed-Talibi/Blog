@extends('layouts.app')

@section('title')
    Blog | My Posts
@endsection

@section('content')
    <div class="container py-5 my-posts-container">
        <h2 class="text-center mb-4">My Posts</h2>
        @if ($posts->isEmpty())
            <p class="text-center no-posts-message">You haven't created any posts yet. Start by creating one!</p>
            <a href="{{route('posts.create')}}" class="btn btn-primary">Create Your First Post !</a>
        @else
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4 mb-4">
                        <div class="card my-post-card">
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top my-post-image" alt="Post Image">
                            <div class="card-body">
                                <h5 class="card-title my-post-title">{{ $post->title }}</h5>
                                <p class="card-text my-post-description">{{ Str::limit($post->description, 150) }}</p>
                                <p class="card-text my-post-meta">
                                    <small class="text-muted">Created: {{ $post->created_at->format('M d, Y') }}</small>
                                </p>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary my-post-show-btn">Show</a>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning my-post-edit-btn">Edit</a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger my-post-delete-btn" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection