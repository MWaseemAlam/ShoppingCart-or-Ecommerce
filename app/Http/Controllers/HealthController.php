<?php

namespace App\Http\Controllers;

use App\health;
use Illuminate\Http\Request;

class HealthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //$viewname="main/ViewThatNeedToChange Text/fibromyalgia";
      //$viewname="category/ViewThatNeedToChange Text/HeartDisease";
      $viewname="category/cancer";

        return view("main.middlesection",['viewname'=>$viewname]);
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
     * @param  \App\health  $health
     * @return \Illuminate\Http\Response
     */
    public function show(health $health)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\health  $health
     * @return \Illuminate\Http\Response
     */
    public function edit(health $health)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\health  $health
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, health $health)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\health  $health
     * @return \Illuminate\Http\Response
     */
    public function destroy(health $health)
    {
        //
    }
}
