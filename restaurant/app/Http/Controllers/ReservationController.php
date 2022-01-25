<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dump(Auth::user()->id);
       // echo 'Hallo store';
       $request->validate(
        [
            'name'=> 'required|max:25|regex:/^[\pL\s\-]+$/u',
            'phone'=> 'required|numeric|min:5',
            'email'=> 'required|email|unique:users,email',
            'date'=> 'required|after:yesterday',
            'number_of_persons'=> 'required|gt:0',
            'time'=> 'required',
        ],
        [
            'name.required' => 'De naam is verplicht.',
            'name.max' => 'De naam mag niet meer dan 25 letters zijn.',
            'name.regex' => 'Mag alleen letters toevoegen.',
            'date.after'=>'Je kan vanaf vandaag een tafel reservering.',
            'number_of_persons.gt'=>'Het aantal personen moet groter zijn dan 0.',
        ]
    );
    $reservation = Reservation::create($request->all());
//dump($reservation->id);
    return redirect()->route('reservations.show',['reservation'=>$reservation->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
       // echo 'Hallo';
        return view('reservations.show')->with('reservation',$reservation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
