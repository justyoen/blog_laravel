<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class HomeController extends Controller
{

    public function Home()
    {
        return view('home');
    }
}