<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;

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
        $offers = Offer::where('user', '=', \Auth::user()->id )->paginate(10);

        return view('home', compact('offers'));
    }

    /**
     * Show the application tokens.
     *
     * @return \Illuminate\Http\Response
     */
    public function tokens()
    {
        return view('tokens');
    }


}
