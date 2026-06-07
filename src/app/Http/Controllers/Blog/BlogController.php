<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return "Show blog posts";
    }

    public function show($post)
    {
        return "Show blog post with id - $post";
    }

    public function like($post)
    {
        return "+1 Like to blog post $post";
    }
}
