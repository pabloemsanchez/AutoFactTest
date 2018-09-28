<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Quiz;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function procesacuestionario(Request $request)
    {
        $id = Auth::user()->id;

        $qz = new Quiz();

        $qz->user_id = $id;
        $qz->Q1 = $request->Q1;
        $qz->Q2 = $request->Q2;
        $qz->Q3 = $request->Q3;

        $qz->save();

        return view('home');
    }
}
