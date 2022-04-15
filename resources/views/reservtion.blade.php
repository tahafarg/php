@extends('template')
@section('body')
{{-- <section class="inner-page"> --}}
    {{-- <div class="container"> --}}  
      {{-- {{dd($data)}} --}}
      @auth
       {{-- @if(Auth::user()->pass) --}}
        {{-- @if (Auth::user()->books['status']=='pending') --}}
{{-- <h1>painding</h1>  --}}   
        
        {{-- @elseif(Auth::user()->books['status']=='Accepted') --}}
        
             <div id="booking" class="section">
               {{-- <div class="section-center"> --}}
                 <div class="container">
                  <div class="row">
                    <div class="booking-form">
                      <div class="booking-bg">
                        <div class="form-header">
                          <h2>Booked successfully</h2>
                          {{-- <p>Your code is 160</p> --}}
                        </div>
                      </div>
                      <form class=form>
                         <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <span class="form-label">Driver Name</span>
                              <input class="form-control" type="text" value="{{$data->driver->user['name']}}"readonly >
                            </div>
                          </div>
                          {{-- </div> --}}
                          <div class="col-md-6">
                          <div class="form-group">
                            <span class="form-label">Car info</span>
                            <input class="form-control" type="text"  value="{{$data->driver['carnum']}}" readonly>
                            </div>
                          </div>
                          {{-- </div> --}}
                          {{-- <div class="row"> --}}
                            <div class="col-md-6">
                            <div class="form-group">
                              <span class="form-label">Time of pickup</span>
                              <input class="form-control" type="text"  value="{{$data->Trip['s_time']}}" readonly>
                              
                            </div>
                          </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <span class="form-label">Time of dorp off</span>
                                <input class="form-control" type="text"  value="{{$data->Trip['e_time']}}" readonly>
                                
                              </div>
                            </div>
                          
                          <div class="col-md-6">
                            <div class="form-group">
                              <span class="form-label">pickup point</span>
                              <input class="form-control" type="text"  value="{{$data->Trip['spos']}}" readonly>
                              
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <span class="form-label">Drop off point</span>
                              <input class="form-control" type="text"  value="{{$data->Trip['epos']}}" readonly>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <span class="form-label">Price</span>
                              <input class="form-control" type="text"  value="{{$data->Trip['price']}}" readonly>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <span class="form-label">Count</span>
                                <input class="form-control" type="text"  value="{{$data['count']}}" readonly>
                              </div>
                            </div>
                            
                            
                <form action="{{--{{route('showbook.destroy',['booking'=>$data])}}--}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input type="submit" name="submit" class="SAASK" value="Cancel Reservation ">
              </form>

                         {{-- we will send to you a massage with this info  --}}
                      </form> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
   {{-- @endif --}}
  {{-- @endif --}}
 
  @endauth

@endsection