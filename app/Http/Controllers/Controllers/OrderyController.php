<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        return view('ordery_create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $rules = $rules = array(
            'ID_sell' => 'require',
            'ID_buy' => 'required',
            'prod_id' => 'required',
            'price' => 'required',
            'amount' => 'required',
        );

        $this->validate($request, $rules);

        $ordery = new Ordery();
        $ordery->ID_sell = $data['ID_sell'];
        $ordery->ID_buy = $data['ID_buy'];
        $ordery->prod_id = $data['prod_id'];
        $ordery->price = $data['price'];
        $ordery->amount = $data['amount'];
        $ordery->save();
        return redirect('admin')->with('message','Order added!');
    }

}
