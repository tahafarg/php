<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Pass;
use App\Models\User;
use Illuminate\Http\Request;


class PassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //     $data = item:: all();
    //     return view ("home",['data'=>$data]);
          return view ("signUp.signupdriver");                        //can read css file
        //   return view ("welcome");
    }


    public function edit(User $ppass)
    {
      //  dd($ppass);
        return view ('prof',['ppass'=>$ppass]);
    }




    public function profile()
    {
        return view('user3');
        // return view('driver.index',['data'=>$data]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pass  $pass
     * @return \Illuminate\Http\Response
     */
    public function update_t(Request $request,User $ppass)
    {
       
        $ppass->update([
                'name'=> $request->name ?? auth()->user->name,
                'email' => $request->email ?? auth()->user()->email,
                'phone' => $request->phone ?? auth()->user()->phone,
                'age' => $request->age ?? auth()->user()->age,
                'gender' => $request->gender ?? auth()->user()->gender,
                'password' => $request->password ?? auth()->user()->password,
        ]);
        // dd($ppass);
        // return  redirect(route('hop'));
        return view('user3');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("signUp.signupdriver");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
            $request->validate(
                [
                            'name' => ['required', 'string', 'max:255'],
                            'email' => ['required', 'string','email', 'max:255', 'unique:users'],
                            'password' => ['required', 'string', 'min:8'],
                            'phone' => ['required', 'string', 'min:11', 'max:11'],
                            'age' => ['required', 'integer', 'min:2'],
                            'carnum' => ['required','string','unique:passes'],
                            'gender' => ['required'],
                            'city' => ['required'],
                            'idcard' => ['required'],
                            'personalImage' => ['required'],
                            'drivelicense' => ['required'],
                            'carlicense' => ['required'],
                            'drugAnalaysis' => ['required'],
                
                        ]
                );
                

        // dd($request);
        $user=User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'age' => $request['age'],
            'phone' => $request['phone'],
            'gender' => $request['gender'],
            'city' => $request['city']

            
        ]);
        

        $img=$request->file("idcard")->getClientOriginalName(); 
        $idcard=$request->file('idcard')->storeAs('imgs', $img, 'public'); 
        
        $img=$request->file("personalImage")->getClientOriginalName(); 
        $personalImage=$request->file('personalImage')->storeAs('imgs', $img, 'public'); 
        

        $img=$request->file("drivelicense")->getClientOriginalName(); 
        $driverLicense=$request->file('drivelicense')->storeAs('imgs', $img, 'public'); 
        
        $img=$request->file("carlicense")->getClientOriginalName(); 
        $carLicense=$request->file('carlicense')->storeAs('imgs', $img, 'public'); 
        

        $img=$request->file("drugAnalaysis")->getClientOriginalName(); 
        $drugAnalaysis=$request->file('drugAnalaysis')->storeAs('imgs', $img, 'public');
        
          Pass::create([

              'user_id'=>$user['id'],
              'idcard'=>$idcard,
              'carnum' => $request['carnum'],
              'personalImage'=>$personalImage,
              'driverLicense'=>$driverLicense,
              'carLicense'=>$carLicense ,
              'drugAnalaysis'=>$drugAnalaysis     
              
            ]); 

       
        return redirect(route('login'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pass  $pass
     * @return \Illuminate\Http\Response
     */
    public function show(Pass $pass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pass  $pass
     * @return \Illuminate\Http\Response
     */
    // public function edit(Pass $pass)
    // {
    //     //
    // }




    // public function profile()
    // {
        // return view('user3');
        // return view('driver.index',['data'=>$data]);
    // }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pass  $pass
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Pass $pass)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pass  $pass
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pass $pass)
    {
        //
    }
}
