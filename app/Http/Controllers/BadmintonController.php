<?php

namespace App\Http\Controllers;

use App\Models\badminton;
use Illuminate\Http\Request;

class BadmintonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
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
     * @param  \App\Models\badminton  $badminton
     * @return \Illuminate\Http\Response
     */
    public function show(badminton $badminton)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\badminton  $badminton
     * @return \Illuminate\Http\Response
     */
    public function edit(badminton $badminton)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\badminton  $badminton
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, badminton $badminton)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\badminton  $badminton
     * @return \Illuminate\Http\Response
     */
    public function destroy(badminton $badminton)
    {
        //
    }
}
