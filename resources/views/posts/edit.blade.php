@extends('layouts.app')

@section('title')
    Blog | Edit Post
@endsection

@section('content')
    <div class="container py-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data" class="edit-post-form">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="postTitle" class="form-label">Post Title</label>
                <input type="text" name="title" id="postTitle" class="form-control" value="{{ $post->title }}">
            </div>
            <div class="form-group mb-3">
                <label for="postDescription" class="form-label">Post Description</label>
                <textarea name="description" id="postDescription" class="form-control" rows="5">{{ $post->description }}</textarea>
            </div>
            <div class="form-group mb-3">
                <label for="postImage" class="form-label">Post Image</label>
                <input type="file" name="image" id="postImage" class="form-control">
            </div>
            <input type="hidden" name="creator_id" value="{{ $post->creator_id }}">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection