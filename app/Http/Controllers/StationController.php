<?php

namespace App\Http\controllers;
use App\Models\Station;
use App\Models\Trip;
use Illuminate\Http\Request;

class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $stat=Station::where('trip_id',$id);
    
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
        Station::create([
            'stat_place'=>$request['stat_place'],
            'time'=>$request['timeing'],
             'trip_id'=>$request['trip_id']
        ]);
        // dd($request); 
        $trip=Trip ::find($request['trip_id']);
        $stat= $trip->stations;
       // return back() ;
        return view('driver.show',['data'=>$trip,'item'=>$stat]);  
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function show(Station $station)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function edit(Station $station)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Station $station)
    {
        
      $station->update([
        'stat_place'=>$request['stat_place'],
        'time'=>$request['timeing']
    ]);
    // dd($comment);
    return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function destroy(Station $station)
    {
        $station->delete();
        return back();      
    
    }




    public function search()
    {
    $search_text = $_GET ['query'];
    //$search_text2=$_GET['query1'];
    $station= Station::where('stat_place',$search_text)->get();
    // dd($station);
    if (empty($station))
    { 
        $search=[];
       // dd($search);
        return view('exprince.search',compact('search'));
    }
   
    $i=0;
    foreach($station as $item){
    //    dd($item->trip);  
       $result[$i]= $item->trip;
    //    $station2=$result[$i]->stations;
    //    dd($station2);
        //  $result = $data;
       $i++;
    //    return view('exprince.search',compact('result'));
    //return back(compact('result'));
    }
   //($result);
    $j=0;
    $search_text1 = $_GET ['query1'];
    $search_text2 = $_GET ['query2'];
    //$station= Station::where('stat_place',$search_text1)->get();
    foreach($result as $item)
    {
      $station =$item->stations;
   // dd($stations);
    $flage=0;
    foreach($station as $x){
        if($x['stat_place']==$search_text1 && $x['time']<=$search_text2){
         $flage=1;   
        }
    }
    if($flage==1){
      $data[$j]=$item;
    }
        // $search[$j]= $item->trip;
        $j++;
    }
    // dd($data);
    if(isset($data)){
        // $data;
        $search_text3 = $_GET ['query3'];
        
        $i=0;
   foreach($data as $y){
       if(empty($search_text2)&&empty($search_text3))
       {
        $search[$i]=$y;
       }
    //    if(empty($search_text2)||empty($search_text3))
    //    {
    //     $search[$i]=$y;
    //    }
    // {{--$y['s_time']==$search_text2)&&--}}
   if($y['price']<=$search_text3){
       $search[$i]=$y;
       $i++;
   }
    }
if(!isset($search)){
    $search=[];
}
}  else{
        $search=[];
    }
   
  
  

    return view('exprince.search',compact('search'));
   // dd($result);
    
}
}
