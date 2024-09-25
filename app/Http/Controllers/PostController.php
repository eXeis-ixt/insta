<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Services\FileService;
use Illuminate\Http\Request;

class PostController extends Controller
{



    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     $post =  new Post;
    //     $
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post;
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png',
            'text' => 'required'
        ]);
        $post = (new FileService)->updateFile($post, $request, 'post');

        $post->user_id = auth()->user()->id;
        $post->text = $request->input('text');
        $post->save();

    }




       public function destroy($id)
    {
        $post = Post::find($id);

        if (!empty($post->file)) {
            $currentFile = public_path() . $post->file;

            if (file_exists($currentFile)) {
                unlink($currentFile);
            }
        }

        $post->delete();
    }
}
