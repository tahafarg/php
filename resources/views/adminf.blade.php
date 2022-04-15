@extends('template')
@section('body')
    

<div class="ADMINSIDEZA">
  <div  class="ADMINSIDE">
    <a href="#" id="aboutZ">About</a>
    <a href="#" id="blogZ">Home</a>
    <a href="#" id="projectsZ">Driver</a>
    <a href="#" id="contactZ">Passenger</a>
  
  </div>
  <div  class="ADMINSIDE">
    <a href="#" id="aboutZs">Trips</a>
    <a href="#" id="blogZs">Station</a>
  </div>
  
  
  <div style="margin-left:80px;">
    <div style="display: flex">
    <div class="ones">
      <div class="oneCARD" >
            <div class="oneCARD1">
            
                <h5 class="DRIVERO">Driver</h5>
                <form class="" action="/driv" method="GET">
                  {{-- action="{{route('drivert.index')}}" --}}
                  <button class="SHOWI" type="submit">Show</button>
                </form>
             
            </div>
          
      </div>
    </div>
      
      <div class="twos">
         <div class="twoCARD">
               <div class="twoCARD2">
          
              <h5 class="DRIVERO2">Passenger</h5>
              <form class="" action="/pass" method="GET">
                <button class="SHOWI" type="submit">Show</button>
              </form>
            
              </div>
          </div>
      </div>
      
    </div>
      <div style="display: flex">
          <div class="threes">
              <div class="threeCARD">
                <div class="threeCARD2">
                  <h5 class="DRIVERO3">Trips</h5>
                  <form class="" action="{{route('trip')}}" method="GET">
                    {{-- action="{{route('trips.show')}}" --}}
                    <button class="SHOWI" type="submit">Show</button>
                  </form>
                </div>
              </div>
            </div>
      
      


        <div class="fours">
            <div class="fourCARD">
              <div class="fourCARD2">
                <h5 class="DRIVERO4">Booking</h5>
                <form class="" method="GET" action="/book">
                  {{-- action="{{route('booking.show')}}" --}}
                  <button class="SHOWI" type="submit">Show</button>
                </form>
              </div>
            </div>
          </div>
      </div>
      
      </div>
      {{-- </nav> --}}
        </div>
     
     
  





@endsection