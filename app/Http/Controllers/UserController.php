<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\MotoCycles;
class UserController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $userProf = User::where('id',$id)->first();
        $userLogin = auth()->user();
        $data=[
            'userLogin'=>$userLogin,
            'userProf'=>$userProf
        ];
        return view('userProfile')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        //
    }
    public function addFavorite(Request $request){
        $user = auth()->user();
        $returnProduct = MotoCycles::find($request->moto_id);
        $check = json_decode($user->favorites,true); // return array
        if (empty($check))
        {
            $newArray = array('0',strval($returnProduct->id));
            $getJson = json_encode($newArray);
            $user->favorites = $getJson;
            $user->userListFavorite()->attach($returnProduct->id);
        }elseif(!in_array(strval($returnProduct->id),(array)$check))
        {
            $newArray = array_values((array)$check);
            array_push($newArray,strval($returnProduct->id));
            $getJson = json_encode($newArray);
            $user->favorites = $getJson;
            $user->userListFavorite()->attach($returnProduct->id);
        }else{
            $key = array_search(strval($returnProduct->id),(array)$check);
            unset($check[$key]);
            $user->userListFavorite()->where('user_id',$user->id)    
                                        ->wherePivot('moto_cycles_id','=',$returnProduct->id)                             
                                        ->detach();
            $newArray = array_values((array)$check);
            $getJson = json_encode($newArray);
            $user->favorites = $getJson;
        }
        $user->save();
        return redirect()
                ->back();
    }
}
