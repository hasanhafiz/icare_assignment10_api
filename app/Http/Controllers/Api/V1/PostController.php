<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\MinimulPostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Knuckles\Scribe\Attributes\Group;
use App\Http\Resources\PostCollection;

#[Group('Posts')]
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::all();
        // return response()->json( new PostResource( $post ) );
        return PostResource::collection( Post::with('category')->get() );
        // return MinimulPostResource::collection( Post::with('category')->get() );
        // return new PostCollection( $post );
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'title' => ['required', 'min:3'],
            'body' => ['required', 'min:6'],
            'user_id' => ['nullable', 'integer'],
            'category_id' => ['nullable', 'integer'],
        ]);
        
        $post = Post::create( $fields );
        
        return [ 'post'  => $post ];
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // return response()->json($post);
        $post->load('user');
        // return response()->json([
        //     'id' => $post->id,
        //     'title' => $post->title,
        //     'created_at' =>  $post->created_at,
        //     'user' =>  $post->user,
        // ]);
        
        return response()->json( new PostResource( $post ) );
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $fields = $request->validate([
            'title' => ['required', 'min:3'],
            'body' => ['required', 'min:6'],
            'user_id' => ['nullable', 'integer'],
            'category_id' => ['nullable', 'integer'],
        ]);
        
        
        $post->update( $fields );
        
        return $post;
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return ['message' => 'Post has been deleted!'];
    }
}
