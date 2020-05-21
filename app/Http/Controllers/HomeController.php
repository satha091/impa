<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
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
    public function home(){

        $events= Events::latest()->take(2)->get();

        return view('index',['events'=>$events]);
    }
}
