<?php



namespace App\Http\Controllers;
use App\Http\Controllers\TripController;
use App\Models\Admin;
use App\Models\booking;
use App\Models\User;
use App\Models\Pass;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminf');
    }

   

    public function index_trip()
    {
        $data= Trip::all();
        return view('trip.index',['data'=>$data]);
        // $data= passes::all();
        // return view('driver',['data'=>$data]);
        // // $data= users::all();
        // return view('passes.index',['data'=>$data]);

    }

    
    public function index_pass()
    {
        $data= User::all();
        return view('pass.index',['data'=>$data]);
        // $data= passes::all();
        // return view('driver',['data'=>$data]);
        // // $data= users::all();
        // return view('passes.index',['data'=>$data]);

    }
    
    public function index_driv()
    {
        
        $data= Pass::all();
       // dd($data);
      // $driver = Auth:: user()->User()->first();

      // $data->User();
        return view('driv.index',['data'=>$data]);
        // $data= passes::all();
        // return view('driver',['data'=>$data]);
        // // $data= users::all();
        // return view('passes.index',['data'=>$data]);

    }

    public function index_book()
    {
        
        $data= booking::all();
       // dd($data);
      // $driver = Auth:: user()->User()->first();

      // $data->User();
        return view('book.index',['data'=>$data]);
        // $data= passes::all();
        // return view('driver',['data'=>$data]);
        // // $data= users::all();
        // return view('passes.index',['data'=>$data]);

    }

    public function show2(Trip $trip)
    {
        // $stat=Station::where('trip_id',$trip['id'])->first();
        //return view('driver.show',['data'=>$trip,'item'=>$stat]);
    }
    public function update_book($id)
   {
    
    $trip = Trip :: find($id);
    $trip->update([
    'status'=>'Accepted'
  ]);
//   dd($trip);
  return back();
   }

   public function update_book2($id)
   {
    
    $trip = Trip :: find($id);
    $trip->update([
    'status'=>'Rejected',
  ]);
  return back();
   }



   public function peind($id){
    $data= User::all();
    $item = pass::find($id);
    // dd($item);
    $item->update(['status'=>'yes']);
    return redirect(route('driv'));
}


   public function acse($id)
   {
    
    $book = booking :: find($id);
    $book->update([
    'status'=>'Accepted',
  ]);
  return back();
   }



  
   
   public function reje($id)
   {
    
    $book = booking :: find($id);
    $book->update([
    'status'=>'Rejected',
  ]);
  return back();
   }
  

   public function done($id)
   {
    
    $book = booking :: find($id);
    $book->update([
    'aces'=>'done',
  ]);
  return back();
   }

   public function not_done($id)
   {
    
    $book = booking :: find($id);
    $book->update([
        'aces'=>'not_done',
  ]);
  return back();
   }

   public function destroy_trip(Trip $trip)
   {
       $trip->delete();
       return  redirect(route('trip'));
   }

   
   public function destroy_pass(User $item)
   {
       
       $item->delete();
       return  redirect(route('pass'));
   }

   public function destroy_driv(Pass $pass)
   {
    
       $pass->delete();
    //    dd($pass);
       return  redirect(route('driv'));
   }

   
   public function destroy_book(booking $book)
   {
       $book->delete();
       return redirect(route('book'));
   }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('pass.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Pass $pass)
    {
        // dd($pass);
        //$data->User();
        // $file = $request->file('img'),
        //      $extension = $file-> getClientOriginalEXtension(),
        //      $filename = time().'.'.$extension,
        //      $file->move('uploads/', $filename),
        //      'img'=> $filename,

         return view('driv.show',['item'=>$pass]);
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
    public function drivers()
    {
        $data= Pass::all();
        return view('drivertable',['data'=>$data]);
        

    }
    // public function img()
    // {
    //     $data= Pass::all();
    //     return view('driverimg',['data'=>$data]);
        
    // }
    public function users()
    {
        $data= User::all();
        return view('passtable',['data'=>$data]);
   
    }
    public function dshow($driver)
    {

        return view('driverimg',['data'=>$driver]);
   
    }

}


