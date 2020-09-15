<?php

namespace App\Http\Controllers;

use App\form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form');
    }

    public function calculator(Request $request)
    {   
        $operator = $request->input('operator');
        $r = $request->input('jari2');
        $t = $request->input('tinggi');
        $phi = 3.14;
        $result = 0;
        $vtabung = $phi * $r * $r * $t;
        $vbola = 3 / 4 * $phi * $r * $r * $r;
        $vkerucut = 1 / 3 * $phi * $r * $r * $t;
        

        if ($operator == "tabung") {
            $result = $vtabung;
            return redirect('/cal')->with('info', 'Volume Tabung Adalah : ' . $result);
        }
        elseif ($operator == "kerucut") {
            $result = $vkerucut;
            return redirect('/cal')->with('info', 'Volume Kerucut Adalah : ' . $result);
        }
        elseif ($operator == "bola") {
            $result = $vbola;
            return redirect('/cal')->with('info', 'Volume Bola Adalah : ' . $result);
        }
        else {
            $result = 0;
        }
        
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
     * @param  \App\form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(form $form)
    {
        //
    }
}
