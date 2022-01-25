<?php

namespace App\Http\Controllers;

use App\Models\Ofenen;
use Illuminate\Http\Request;

class OfenenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all objecten.
        $charaties = Ofenen::all();

        // 1- echo 'Hallo'; deze werkt.
        // dump($charaties); // database werkt.
        return view('oefenen.index')->with(['charaties'=> $charaties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('oefenen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dump($request);
        $request->validate(
            [
                'name'=> 'required',               
            ]
        );
        Ofenen::create($request->all());

        return redirect()->route('oefenen.index')->with('success','Products created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ofenen  $ofenen
     * @return \Illuminate\Http\Response
     */
    public function show(Ofenen $oefenen)
    {
        //$ofenen = Ofenen::find(1);
        //dump($ofenen);
        return view('oefenen.show')->with(['ofenen'=> $oefenen]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ofenen  $ofenenphp artisan --version
     * @return \Illuminate\Http\Response
     */
    public function edit(Ofenen $oefenen)
    {
       //  dump($oefenen);
        // echo "Hallo edit";
        return view('oefenen.update')->with(['oefenen'=> $oefenen]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ofenen  $ofenen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ofenen $oefenen)
    {
       // dump($oefenen);

    $oefenen->update(
        [
            'name'=> $request->name, 
            'start'=> $request->start,
            'end'=> $request->end,
            'start_time'=> $request->start_time,
            'end_time'=> $request->end_time,              
        ]
    );

    return redirect()->route('oefenen.index')->with('success','Products created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ofenen  $ofenen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ofenen $oefenen)
    {
        //dump($oefenen);
        $oefenen->delete();
        return redirect()->route('oefenen.index')->with('success','Products created successfully.');
    }
}
