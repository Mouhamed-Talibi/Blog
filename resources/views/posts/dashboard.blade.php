@extends('layouts.app')

@section('title')
    Blog | Dashboard
@endsection

@section('content')
    <div class="container py-5">
        <div class="welcome-message mb-4">
            <p>Welcome Back, <b>{{ $user->f_name }} {{ $user->l_name }}</b></p>
            <p>Feel Free to explore your posts and create new ones!</p>
        </div>
        <div class="access-links">
            <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>
            <a href="{{ route('posts.myPosts') }}" class="btn btn-secondary">Take A Look At Your Posts</a>
        </div>
    </div>
@endsection