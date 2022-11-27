<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        $packet_name = "Packet 1";
        return view('frontpage.cart', compact('packet_name'));
    }
}
