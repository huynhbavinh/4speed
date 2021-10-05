<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Models\MotoCycles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Environment\Console;

class MotoCyclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $splitName = explode(" ",$user->name);
        $lastUsername = array_pop($splitName);

        $listMoto = MotoCycles::paginate(6);
        $data=[
            'listMoto' => $listMoto,
            'lastName' => $lastUsername,
            'userLogin'=> $user,
        ];
        return view('home')->with($data);
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
     * @param  \App\Models\MotoCycles  $motoCycles
     * @return \Illuminate\Http\Response
     */
    public function show(MotoCycles $sanpham)
    {   
        $comments = comment::where('product_id',$sanpham->id)->paginate(3);
        $user = auth()->user();
        $data=[
            'moto'=>$sanpham,
            'comments'=>$comments,
            'user'=>$user,
        ];
        return view('details')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MotoCycles  $motoCycles
     * @return \Illuminate\Http\Response
     */
    public function edit(MotoCycles $motoCycles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MotoCycles  $motoCycles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MotoCycles $motoCycles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MotoCycles  $motoCycles
     * @return \Illuminate\Http\Response
     */
    public function destroy(MotoCycles $motoCycles)
    {
        //
    }
}
