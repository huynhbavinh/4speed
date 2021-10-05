<?php

namespace App\Http\Controllers;

use App\Models\FamousPeople;
use Illuminate\Http\Request;

class FamousPeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listUser = FamousPeople::all();
        return view('discover')->with('listUser',$listUser);
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
     * @param  \App\Models\FamousPeople  $famousPeople
     * @return \Illuminate\Http\Response
     */
    public function show(FamousPeople $famousPeople)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FamousPeople  $famousPeople
     * @return \Illuminate\Http\Response
     */
    public function edit(FamousPeople $famousPeople)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FamousPeople  $famousPeople
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FamousPeople $famousPeople)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FamousPeople  $famousPeople
     * @return \Illuminate\Http\Response
     */
    public function destroy(FamousPeople $famousPeople)
    {
        //
    }
}
