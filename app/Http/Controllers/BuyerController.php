<?php

namespace App\Http\Controllers;

use App\Buyer;
//use Illuminate\Http\Request;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     * show all list of buyers
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $buyers = Buyer::all();
        return $this->showAll($buyers);     
    }

    /**
     * Display the specified resource.
     * show one buyer
     * @param  \App\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function show(Buyer $buyer)
    {
        return $this->showOne($buyer);
    }
}
