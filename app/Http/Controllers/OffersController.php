<?php

namespace App\Http\Controllers;

use App\Product;
use App\Offer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use function redirect;
use function view;

class OffersController extends Controller
{
    // Middleware
    public function __construct()
    {
        // only Admins have access
        $this->middleware('admin');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('offers_create', array('name' => Product::all()->sortBy('name')->pluck('name','id')));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $rules = $rules = array(
            'product' => 'required',
            'price' => 'required',
            'country' => 'required',
            'description' => 'required',
        );

        $this->validate($request, $rules);

        $offers = new Offer();
        $offers->ID_us = Auth::id();
        $offers->id_pr = $data['product'];
        $offers->price = $data['price'];
        $offers->country = $data['country'];
        $offers->description = $data['description'];
        $offers->save();
        return redirect('home');
    }

}
