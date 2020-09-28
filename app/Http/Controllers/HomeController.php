<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

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

    public function index()
    {

        $games = Game::all();
        
        $role = auth()->user()->role_id;
        if($role == 1)
        {
            return view('backend.home');
        }else{
            return view('index', compact('games'));
            
        }
        

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function returning()
    {
        $role = auth()->user()->role_id;
        if($role == 1)
        {
            return view('backend.home');
        }else{
            return view('frontend.home');
        }
        
    }
}
