<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Association;
use App\AssociationMember;
use App\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $activities = Activity::orderBy('id', 'desc')->paginate(6);


        return view('home', ['activities' => $activities]);
    }
}
