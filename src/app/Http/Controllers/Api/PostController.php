<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return 'Сторінка список постів';
    }

    public function create()
    {
        return 'Сторінка створення поста';
    }

    public function store()
    {
        return 'Запит створення поста';
    }

    public function show($post)
    {
        return "Сторінка перегляду поста $post";
    }

    public function edit($post)
    {
        return 'Сторінка редагування поста';
    }

    public function update($post)
    {
        return 'Запит редагування поста';
    }

    public function delete($post)
    {
        return 'Запит видалення поста';
    }

    public function like($post)
    {
        return 'Like +1';
    }
}
