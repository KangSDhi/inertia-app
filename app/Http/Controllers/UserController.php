<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index(){
        $title = 'User';
        return Inertia::render('User/Index', [
            'title' => $title
        ]);
    }
}
