<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TalentCategory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['getTalentCat']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getTalentCat(Request $request)
    {
        $talentCat = TalentCategory::all();     
        return view('auth.register-user',['getCat'=>$talentCat]);
    }
}
