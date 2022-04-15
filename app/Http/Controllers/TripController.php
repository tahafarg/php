<?php

namespace App\Http\Controllers;
use App\Models\Station;
use Illuminate\support\Facades\Auth;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //paginate(5);
        $data= Trip::all();
        return view('driver.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function crea()
    {
        
        return view('driver.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            's_time'=>'required',
            'e_time'=>'required',
            'spos'=>'required',
            'epos'=>'required',
            'price'=>'required',
       

        ]);
        Trip::create([
            's_time'=>$request['s_time'],
            'e_time'=>$request['e_time'],
            'spos'=>$request['spos'],
            'epos'=>$request['epos'],
            // 'stat_place'=>$request['stat_place'],
            'price'=>$request['price'],
            'driver_id'=>Auth::user()->Pass['id']

            
        ]);
      return  redirect(route('trips.index'));
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show(Trip $trip)
    {
         $stat=Station::where('trip_id',$trip['id'])->first();
        return view('driver.show',['data'=>$trip,'item'=>$stat]);
    }
    public function showtrip(Request $request) {
        $trip=Trip ::find($request['id']);
 
        $stat=$trip->stations;
       //  dd($stat);
       return view('driver.show',['data'=>$trip,'item'=>$stat]);
   }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(Trip $trip)
    {
        return view('driver.edit',['item'=>$trip]);
    }
    // public function edittrip(Trip $trip)
    // {
    //     $trip=Trip ::find($request['id']);
 
    //     $stat=$trip->stations;
    //     return view('driver.edit',['item'=>$trip]);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trip $trip)
    {
        
        $trip->update([
            's_time'=>$request['s_time'],
            'e_time'=>$request['e_time'],
            'spos'=>$request['spos'],
            'epos'=>$request['epos'],
            'stat_place'=>$request['stat_place'],
            'price'=>$request['price']

        ]);
      return  redirect(route('trips.index'));
    
    }


    // public function UPDAT(Request $request, Trip $trip)
    // {
    //     $trip=Trip ::find($request['id']);
    //     $stat=$trip->stations;


    //     $trip->update([
    //         's_time'=>$request['s_time'],
    //         'e_time'=>$request['e_time'],
    //         'spos'=>$request['spos'],
    //         'epos'=>$request['epos'],
    //         'stat_place'=>$request['stat_place'],
    //         'price'=>$request['price']

    //     ]);
    //   return  redirect(route('trips.index'));
    
    // }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trip $trip)
    {
        $trip->delete();
        return  redirect(route('trips.index'));
    }
    public function logoutuser()
    {
     Auth :: logout();
     return redirect(route('home'));
    }

}
