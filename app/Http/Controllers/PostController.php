<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Storage;
use App\Models\Post;
use App\Models\User;


class PostController extends Controller
{
    public function createAction(){
        $user = auth()->user();
        return view('posts.create', compact('user'));
    }

    public function storeAction(){
        // validate data
        request()->validate([
            'title'=>['required', 'max:50'],
            'description'=>['required'],
            'image'=>['required'],
            'creator_id'=>['required', 'exists:users,id']
        ]);
        // handle uploaded image
        $imagePath = request()->file('image')->store('uploads', 'public');
        // new post
        $post = new Post();
        $post->title = request('title');
        $post->description = request('description');
        $post->image = $imagePath;
        $post->creator_id = request('creator_id');
        // save
        $post->save();
        // redirect user :
        return redirect()->route('posts.myPosts');
    }

    public function myPostsAction(){
        $user = auth()->user();
        $posts = Post::where('creator_id', $user->id)->get();
        return view('posts.myPosts', compact('posts'));
    }

    public function allPostsAction(){
        $posts = Post::with('creator')->get();
        return view('posts.allPosts', compact('posts'));
    }

    public function showAction($postId){
        $post = Post::findOrFail($postId);
        if(!$post){
            return redirect()->route('posts.allPosts');
        }
        return view('posts.show', compact('post'));
    }

    public function editAction(Post $post){
        return view('posts.edit', compact('post'));
    }

    public function updateAction($postId){
        // Validate the incoming request
        request()->validate([
            'title' => ['required'],
            'description' => ['required'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'], 
            'creator_id' => ['required', 'exists:users,id'], 
        ]);
        // Find the post to update
        $post = Post::findOrFail($postId);
        // Handle the image upload, if any
        if (request()->hasFile('image')) {
            // Delete the old image if it exists
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            // Store the new image
            $imagePath = request()->file('image')->store('uploads', 'public');
        } else {
            // Keep the old image
            $imagePath = $post->image;
        }

        // Update the post
        $post->update([
            'title' => request('title'),
            'description' => request('description'),
            'image' => $imagePath,
            'creator_id' => request('creator_id'),
        ]);
        // Redirect after successful update
        return redirect()->route('posts.show', $postId)->with('success', 'Post updated successfully!');
    }

    public function destroyAction($postId){
        $post = Post::findOrFail($postId);
        $post->delete();
        // redirect after deleting : 
        return redirect()->route('posts.myPosts');
    }

}
