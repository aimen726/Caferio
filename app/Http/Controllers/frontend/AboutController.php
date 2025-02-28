<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\AboutModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.about');
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
     * @param  \App\Models\frontend\AboutModel  $aboutModel
     * @return \Illuminate\Http\Response
     */
    public function show(AboutModel $aboutModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\frontend\AboutModel  $aboutModel
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutModel $aboutModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\frontend\AboutModel  $aboutModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutModel $aboutModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\frontend\AboutModel  $aboutModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutModel $aboutModel)
    {
        //
    }
}
