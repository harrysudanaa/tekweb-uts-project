<?php

namespace App\Http\Controllers;
use App\Models\TourGuide;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $data = TourGuide::all();
        return view('frontpage.service', ['title' => 'Service'])->with('data', $data);
    }
}
