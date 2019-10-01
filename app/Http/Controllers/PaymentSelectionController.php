<?php

namespace App\Http\Controllers;

use App\PaymentSelection;
use Illuminate\Http\Request;

class PaymentSelectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('PaymentSelection');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PaymentSelection  $paymentSelection
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentSelection $paymentSelection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PaymentSelection  $paymentSelection
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentSelection $paymentSelection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PaymentSelection  $paymentSelection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentSelection $paymentSelection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaymentSelection  $paymentSelection
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentSelection $paymentSelection)
    {
        //
    }
}
