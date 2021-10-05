<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;
use App\Http\Controllers\MotoCyclesController;
use App\Models\MotoCycles;
use App\Models\User;

class CommentController extends Controller
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
        $newComm = new comment();
        $newComm->fill($request->all());
        $returnProduct = MotoCycles::find($request->product_id);
        auth()->user()->comments()->save($newComm);
        return redirect()
                ->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(comment $comment)
    {
        //
    }
    public function likeVote(Request $request,comment $comment){
        $updateLike = comment::find($request->id_comm);
        $returnProduct = MotoCycles::find($updateLike->product_id);
        $getUser = auth()->user();
        $check = json_decode($getUser->interact,true); // return array
        if (empty($check))
        {
            $updateLike->like += 1;
            $newArray = array('0',strval($updateLike->id));
            $getJson = json_encode($newArray);
            $getUser->interact = $getJson;

        }elseif(!in_array(strval($updateLike->id),(array)$check))
        {
            $updateLike->like += 1;
            $newArray = array_values((array)$check);
            array_push($newArray,strval($updateLike->id));
            $getJson = json_encode($newArray);
            $getUser->interact = $getJson;

        }else{
            $key = array_search(strval($updateLike->id),(array)$check);
            $updateLike->like -= 1;
            unset($check[$key]);
            $newArray = array_values((array)$check);
            $getJson = json_encode($newArray);
            $getUser->interact = $getJson;
        }
        $getUser->save();
        $updateLike->save();
        return redirect()
                ->back();
    }
}
