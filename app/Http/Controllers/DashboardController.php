<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Organizations;


class DashboardController extends Controller
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

        // super admin defines org for user(admin) -> 3

        //login as sambidrizal71


        $orgId = Auth::user()->organization_id;
        $org = Organizations::where('oid', $orgId)->first();

        // dd($org);
        return view('dashboard', array(
            'org' => $org
        ));
    }
}
