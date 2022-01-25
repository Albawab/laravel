<?php

namespace App\Http\Controllers;

use App\Models\tafel;
use Illuminate\Http\Request;

class TafelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  dump("Hallo");
        //echo "Hallo";
        $tafels = tafel::all();
        //dump($tafels);
        return view('tafels.index')->with('tafels',$tafels);;
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
     * @param  \App\Models\tafel  $tafel
     * @return \Illuminate\Http\Response
     */
    public function show(tafel $tafel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tafel  $tafel
     * @return \Illuminate\Http\Response
     */
    public function edit(tafel $tafel)
    {
        return view('tafels.update')->with(['tafel'=>$tafel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tafel  $tafel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tafel $tafel)
    {
      // echo "Hallo";
        //dump($tafel);
        $tafel->update(
            [
                //'number'=> $request->number, 
                'number_of_guest'=> $request->number_of_guest,
                'description'=> $request->description,             
            ]
        );
    
        return redirect()->route('tafels.index')
        ->with('success','Products created successfully.');
        // ->with('tafel',$tafel);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tafel  $tafel
     * @return \Illuminate\Http\Response
     */
    public function destroy(tafel $tafel)
    {
        $tafel->delete();
        return redirect()->route('tafels.index')->with('success','Products deleted successfully.');
    }
}
