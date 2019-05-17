<?php

namespace App\Http\Controllers;

use App\Offer;
use App\Product;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', array('product' => 'products', 'products' => Offer::orderBy('id_pr')->get()));
    }
}
