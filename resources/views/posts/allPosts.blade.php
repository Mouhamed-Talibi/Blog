@extends('layouts.app')

@section('title')
    Blog | All Posts
@endsection

@section('content')
    <div class="container py-5 all-posts-container">
        <div class="table-responsive">
            <table class="table table-striped all-posts-table">
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
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ Str::limit($post->description, 100) }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="post-image">
                            </td>
                            <td>{{ $post->creator->f_name }} {{ $post->creator->l_name }}</td>
                            <td>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm show-post-btn">Show</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
