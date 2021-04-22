<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post) 
    {
        $posts = [
            'my-first-post' => 'Hello, my 1st post here',
            'my-second-post' => 'This is my 2ed post!!',
        ];
    
        if (! array_key_exists($post, $posts)) {
            abort(404, "Sorry, that post was not found.");
        }
    
        return view('post', [
            'post' => $posts[$post]
        ]);
    }
}
