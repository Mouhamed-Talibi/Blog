@extends('layouts.app')

@section('title')
    Blog | Create Post
@endsection

@section('content')
    <div class="container my-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="create-post-form">
            @csrf
            <div class="form-group mb-4">
                <label for="title" class="form-label">Post Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
            </div>
            <div class="form-group mb-4">
                <label for="description" class="form-label">Post Description</label>
                <textarea name="description" id="description" class="form-control" rows="6">{{ old('description') }}</textarea>
            </div>
            <div class="form-group mb-4">
                <label for="image" class="form-label">Post Image</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
            <input type="hidden" name="creator_id" value="{{ $user->id }}">
            <div class="text-center">
                <button type="submit" class="btn btn-primary px-5">Create</button>
            </div>
        </form>
    </div>
@endsection