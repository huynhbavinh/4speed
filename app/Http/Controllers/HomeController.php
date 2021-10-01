<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;
use App\Models\MotoCycles;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
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
        ];
        return view('home')->with($data);
    }
}
