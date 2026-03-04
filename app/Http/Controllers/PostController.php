<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = [
            [
                'id' => 1,
                'title' => 'Getting Started with Laravel',
                'content' => 'Learn the basics of Laravel framework and build your first application.',
            ],
            [
                'id' => 2,
                'title' => 'Understanding Eloquent ORM',
                'content' => 'Dive deeper into Laravel\'s Eloquent ORM and learn how to work with databases efficiently.',
            ],
            [
                'id' => 3,
                'title' => 'Building RESTful APIs',
                'content' => 'A comprehensive guide to building RESTful APIs using Laravel with proper routing and controllers.',
            ],
        ];

        return view('posts.index', ['posts' => $posts]);
    }

    public function show($id)
    {
        $posts = [
            [
                'id' => 1,
                'title' => 'Getting Started with Laravel',
                'content' => 'Learn the basics of Laravel framework and build your first application.',
            ],
            [
                'id' => 2,
                'title' => 'Understanding Eloquent ORM',
                'content' => 'Dive deeper into Laravel\'s Eloquent ORM and learn how to work with databases efficiently.',
            ],
            [
                'id' => 3,
                'title' => 'Building RESTful APIs',
                'content' => 'A comprehensive guide to building RESTful APIs using Laravel with proper routing and controllers.',
            ],
        ];

        $post = collect($posts)->firstWhere('id', $id);

        if (!$post) {
            return redirect('/posts')->with('error', 'Post not found');
        }

        return view('posts.show', ['post' => $post]);
    }
}
