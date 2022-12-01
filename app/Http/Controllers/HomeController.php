<?php

namespace App\Http\Controllers;

use App\Models\TourGuide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        $data = TourGuide::all();
        // dd($data);
        // return $data;
        return view('frontpage.landingpage', ['title' => 'Landing Page'])->with('data', $data);
    }
    public function service()
    {
        return view('frontpage.service', ['title' => 'Service']);
    }
}
