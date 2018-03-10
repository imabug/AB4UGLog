<?php

namespace AB4UGLog\Http\Controllers;

use AB4UGLog\LogBook;
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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logbooks = LogBook::get();
        if ($logbooks->count() > 0) {
            return view('home', [
                'logbooks' => $logbooks]);
        } else {
            return view('logbooks.logbook_create');
        }
    }
}
