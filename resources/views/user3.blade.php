@extends('template')
@section('body')
@auth
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="">
            <div class="maxi">
                <div class=" user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white" >
                               
                        <div class="m-b-25" > <img src="https://img.icons8.com/bubbles/100/000000/user.png " class="img-radius" alt="User-Profile-Image">
                        <h2 >Your Profile</h2>
                        <br>
                        {{-- {{route('ppass.edit',['ppass'=>Auth::user()])}} --}}
                        {{-- /edit/{ppass=>Auth::user()} --}}
                        {{-- /edit,['ppass'=>Auth::user()] --}}
                        <a class="btn btn-danger" href="{{route('ppass.edit',['ppass'=>Auth::user()])}}">
                            edit
                        </a>
      
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
                                    
                                
                               
                        
        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br>
@endauth
@endsection