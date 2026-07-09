<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;

class RegisterContoller extends Controller
{
    public function index()
    {
        return view('registration.index');
    }

    public function store()
    {
        return 'Запит на реєстрацію користувача';
    }
}
