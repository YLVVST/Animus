<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    // Ir a la vista de registro de usuario.
    public function getSignupView()
    {
        return view('pages.signup');
    }
}
