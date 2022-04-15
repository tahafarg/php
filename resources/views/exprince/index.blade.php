@extends('template')
@section('body')
    @auth

    <div class="parent">
<div class="Dsech">
<form method="get" action="/station">

 <div class="selecto">
    <label for="time-start">start point</label>

    <select class="SECH1"  name="query">
        <option value="" disabled selected> Start Station</option>
        <option value="Sahaary">Sahaary</option>
        <option value="EL-Mahata">EL-Mahata</option>
        <option value="El-Sail">El-Sail</option>
        <option value="El-Nafaa">El-Nafaa</option>
        <option value="El-Korneesh">El-Korneesh</option>
        <option value="El-Taameen">El-Taameen</option>
        <option value="El-Maawkaf">El-Maawkaf</option>
        <option value="Atlas">Atlas</option>
    </select>

    <label for="time-start">end point</label>
    <select class="SECH1 "  name="query1">
        <option value="" disabled selected> End Station</option>
        <option value="Sahaary">Sahaary</option>
        <option value="El-Sail">El-Sail</option>
        <option value="El-Nafaa">El-Nafaa</option>
        <option value="El-Korneesh">El-Korneesh</option>
        <option value="El-Taameen">El-Taameen</option>
        <option value="El-Maawkaf">El-Maawkaf</option>
        <option value="Atlas">Atlas</option>
    </select>
 </div>
    <br>
    <label for="time-start">Time of trip start</label>
    <input type="time" class="PUT" id="time-start" name="query2">
	
    
    <label for="time-start">price</label>
    <input type="text" class="PUT" id="time-start" name="query3">
						<div>
       <button type="submit" class="SECHO" >search</button>
                        </div>
    </form>
        </div>
    </div>


{{-- ///////////////////////////// --}}

                @foreach ($data as $item)
                    {{-- <th scope="row">{{$item['id']}}</th> --}}
                <div class="EX-INDEX">
                    <div class="EX-INDEX2">
                    <p>Start time : {{$item['s_time']}}</p>
                    <p>End time : {{$item['e_time']}}</p>
                    <p>Start Place : {{$item['spos']}}</p>
                    <p>End Place : {{$item['epos']}}</p>
                    <p>Price : {{$item['price']}}</p>
                    
                 </div></div>
 
                @endforeach
@endauth
@endsection