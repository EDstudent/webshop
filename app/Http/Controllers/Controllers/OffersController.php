<?php

namespace App\Http\Controllers;

use App\Event;
use App\Ticket;
use Illuminate\Http\Request;

class TicketsController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offers_create', array('events' => Event::orderBy('name')->pluck('name', 'id')));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $rules = $rules = array(
            'ID_us' => 'require',
            'ID_pr' => 'required',
            'product' => 'required',
            'country' => 'required',
        );

        $this->validate($request, $rules);

        $offers = new Ordery();
        $offers->ID_us = $data['ID_us'];
        $offers->ID_pr = $data['ID_pr'];
        $offers->price = $data['price'];
        $offers->country = $data['country'];
        $offers->save();
        return redirect('admin')->with('message','Offer added!');
    }

}
