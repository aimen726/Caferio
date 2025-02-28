<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\FAQModel;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.faqs');
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
     * @param  \App\Models\frontend\FAQModel  $fAQModel
     * @return \Illuminate\Http\Response
     */
    public function show(FAQModel $fAQModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\frontend\FAQModel  $fAQModel
     * @return \Illuminate\Http\Response
     */
    public function edit(FAQModel $fAQModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\frontend\FAQModel  $fAQModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FAQModel $fAQModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\frontend\FAQModel  $fAQModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(FAQModel $fAQModel)
    {
        //
    }
}
