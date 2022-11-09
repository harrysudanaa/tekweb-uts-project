<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontpage.landingpage', ['title' => 'Landing Page']);
    }
    public function service()
    {
        return view('frontpage.service', ['title' => 'Service']);
    }
}
