<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\ReservationModel;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        return view('frontend.reservation');
    }

    public function reservation(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'person' => 'required|integer',
            'date' => 'required|date',
            'message' => 'required'
        ]);

        $reservation = new ReservationModel();
        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->person = $request->person;
        $reservation->date = $request->date;
        $reservation->message = $request->message;
        $reservation->save();

        return back()->with('success', 'Thanks for contacting. We\'ll contact you ASAP!');
    }
}
