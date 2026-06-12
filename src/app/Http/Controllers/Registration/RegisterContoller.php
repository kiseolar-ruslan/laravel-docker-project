<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;

class RegisterContoller extends Controller
{
    public function index()
    {
        dd('Show Registration Page');
    }

    public function store()
    {
        return 'Запит на реєстрацію користувача';
    }
}
