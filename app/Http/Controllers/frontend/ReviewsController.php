<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\ReviewsModel;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.reviews');
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
     * @param  \App\Models\frontend\ReviewsModel  $reviewsModel
     * @return \Illuminate\Http\Response
     */
    public function show(ReviewsModel $reviewsModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\frontend\ReviewsModel  $reviewsModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ReviewsModel $reviewsModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\frontend\ReviewsModel  $reviewsModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReviewsModel $reviewsModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\frontend\ReviewsModel  $reviewsModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReviewsModel $reviewsModel)
    {
        //
    }
}
