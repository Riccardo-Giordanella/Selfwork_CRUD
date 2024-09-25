<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {
    return view('welcome');
    }

    public function articles() {
    return view('articles');
    }

    public function register() {
    return view('auth.register');
    }

    public function create() {
    return view('create');
    }
}
