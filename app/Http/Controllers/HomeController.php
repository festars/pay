<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;
use Auth;
use Carbon\Carbon;

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
        // $sub = Subscription::where('user_id',Auth::user()->user_id)->find();
        // $su_id = $sub->id;   
        $subscription = Auth::user()->subscription;
        $diff = '';
        // dd($subscription);
        $status = false;
        if ($subscription != null) {
            $end = Carbon::now();
            $start = Carbon::parse($subscription->status);
            $diff = $end->diffInDays($start);

            

            if ($subscription->status > date("Y-m-d H:i:s")) {
                $status = true;
            }
        }
        return view('home')->withStatus($status)->withDiff($diff);
    }
}
