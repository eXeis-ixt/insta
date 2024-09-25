<?php

namespace App\Http\Controllers;

use App\Http\Resources\AllPostCollection;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(){
        $allUser = User::all();
        $posts = Post::orderBy('created_at', 'desc')->get();
        return Inertia::render('Home', [
            'posts' => new AllPostCollection($posts),
            'allUsers' => $allUser
        ]);
    }


}
