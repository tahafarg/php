@extends('template')

@section('body')



<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white" >
                                <div class="m-b-25" > <img src="/storage/{{Auth::user()->personalImage}} " class="img-radius" alt="User-Profile-Image" >
                                
                                <h2 >Your Profile</h2>
                                <br>
                              <button type="button" class="btn" >Edit</button>
                            
                            </div>
                            
                              
                                   @csrf

                                <p > </p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16" ></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block" id="card">
                                <h1 class="m-b-20 p-b-5 b-b-default f-w-600"><b>Information </b></h1>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        {{ Auth::user()->email }}
                                        <h6 class="text-muted f-w-400"></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Name</p>
                                        {{ Auth::user()->name }}
                                        <h6 class="text-muted f-w-400"></h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        {{ Auth::user()->phone }}
                                        <h6 class="text-muted f-w-400"></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Age</p>
                                        {{ Auth::user()->age }}
                                        <h6 class="text-muted f-w-400"></h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>

                                <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Gender</p>
                                        {{ Auth::user()->gender }}
                                        <h6 class="text-muted f-w-400"></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">City</p>
                                        {{ Auth::user()->city }}
                                        <h6 class="text-muted f-w-400"></h6>
                                    </div>


<br>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Car Number</p>
                                        {{ Auth::user()->carnum }}
                                        <h6 class="text-muted f-w-400"></h6>
                                    </div>
                                    <br>
                                    <div class="m-b-25" > <p class="m-b-10 f-w-600">Driver License</p><img src="{{Auth::user()->driverLicense}} " class="img-radius" alt="User-Profile-Image" >
                                    
                                <!-- <h2 >Your Profile</h2> -->
                                <br>
                              <!-- <button type="button" class="btn" >Edit</button> -->
                            
                            </div>



                                    <!-- <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Driver License</p>
                                        {{ Auth::user()->driverLicense }}
                                        <h6 class="text-muted f-w-400"></h6>
                                    </div> -->
                                   
                                    <div class="m-b-25" > <p class="m-b-10 f-w-600">Car License</p><img src="{{Auth::user()->carLicense}} " class="img-radius" alt="User-Profile-Image" >
                                    
                                    <!-- <h2 >Your Profile</h2> -->
                                    <br>
                                  <!-- <button type="button" class="btn" >Edit</button> -->
                                
                                </div>
                                    <!-- <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Car License</p>
                                        {{ Auth::user()->carLicense }}
                                        <h6 class="text-muted f-w-400"></h6>
                                    </div> -->
                                    <div class="m-b-25" > <p class="m-b-10 f-w-600">Drug Analysis</p><img src="{{Auth::user()->drugAnalaysis}} " class="img-radius" alt="User-Profile-Image" >
                                    
                                <!-- <h2 >Your Profile</h2> -->
                                <br>
                              <!-- <button type="button" class="btn" >Edit</button> -->
                            
                            </div>

                                    <!-- <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Drug Analysis</p>
                                        {{ Auth::user()->drugAnalaysis }}
                                        <h6 class="text-muted f-w-400"></h6>
                                    </div> -->
                                  

                                    

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br>
@endsection