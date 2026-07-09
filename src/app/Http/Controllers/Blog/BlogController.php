<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $post = (object) [
            'id' => 1,
            'title' => 'Title 1',
            'content' => 'Contnet 1'
        ];
        $posts = array_fill(0, 10, $post);

        return view('blog.index', compact('posts'));
    }

    public function show($post)
    {
        $post = (object) [
            'id' => 1,
            'title' => 'Title 1',
            'content' => 'Lorem ipsum content 1'
        ];

        return view('blog.show', compact('post'));
    }

    public function like($post)
    {
        return "+1 Like to blog post $post";
    }
}
