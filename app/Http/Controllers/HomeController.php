<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\DashboardAdmin;

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
        if (auth()->user()->role=="1"){
            $db_list = DashboardAdmin::all();
            return view('dashboard.dashboardadm', ['db_list' => $db_list]);
        }else{
            $db_user = DashboardAdmin::all();
            return view('dashboard.dashboard', ['db_user' => $db_user]);

        }
    }
}
