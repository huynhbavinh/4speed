<?php

namespace App\Http\Controllers;

use App\Models\MotoCycles;
use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(MotoCycles $article)
    {
        return view('admin.edit')->with('article',$article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public static function APIpassArticle($id){
        $listCategories = Category::all();
        $article = MotoCycles::where('id',$id)->firstOrFail();
        $data=[
            'listCategories'=>$listCategories,
            'moto'=>$article,
        ];
        return $data;
    }
    public static function APIadminGetAllMoto(){
        $articles = MotoCycles::withTrashed()->get();
        $listCategories = Category::all();
        $data = [
            'listArticles'=>$articles,
            'listCategories'=>$listCategories,
        ];
        return $data;
    }
}
