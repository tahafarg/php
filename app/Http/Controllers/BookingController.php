<?php

namespace App\Http\Controllers;
use App\Models\Trip;
use App\Models\booking;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Station;
use App\Models\Pass;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Trip::all();
        // dd($data);
        return view('exprince.index',['data'=>$data]);
    }

    // public function creaat(trip $data)
    // {
//    dd($data);
    //     return view('reservtion',['data'=>$data]);
    // }

    public function shower (Request $request)
    {
    //    if (empty('data'))
    //    {return view ('driver.index');
    //    }
    //    else{
      //  $data = Booking::all();
     // dd(Trip::find($request['id'])->books);
      $data=Trip::find($request['id'])->books;
        //dd($data);
       return view ('driver.shower',['data'=>$data]);
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
       //dd($request);
        $spos=Station::where('stat_place',$request['spos'])->get()[0]['id'];
        $espos=Station::where('stat_place',$request['espos'])->get()[0]['id'];
        // dd($spos);
       $book= booking::create([
            'trip_id'=>$request['trip_id'],
            'user_id'=>$request['user_id'],
            'driver_id'=>$request['driver_id'],
            'spos_id'=>$spos,
            'espos_id'=>$espos,
            'count'=>$request['count']

        ]);
      return view('reservtion',['data'=>$book]);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(booking $booking)
    {
        
            $booking->delete();
            return back();      
        
    }
}
