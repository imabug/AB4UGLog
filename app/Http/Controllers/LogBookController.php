<?php

namespace AB4UGLog\Http\Controllers;

use AB4UGLog\LogBook;
use Illuminate\Http\Request;
use AB4UGLog\Http\Requests\GetLogBookRequest;
use AB4UGLog\Http\Requests\StoreLogBookRequest;

class LogBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('logbooks.logbook_create');
    }

    /**
     * Get a logbook
     *
     * @param AB4UGLog\Http\Requests\GetLogBookRequest $request
     * @return \Illuminate\Http\Response
     */
    public function get(GetLogBookRequest $request)
    {
        return view('logbooks.logbook_show', ['id' => $request->logbookId]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AB4UGLog\Http\Requests\StoreLogBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLogBookRequest $request)
    {
        $logbook = LogBook::create([
            'logbook' => $request->logname,
        ]);

        $logbooks = LogBook::get();

        return view('home', $logbooks);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $logbook = LogBook::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
