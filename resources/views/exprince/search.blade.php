@extends('template')
@section('body')
@auth
{{-- <table class="table table-success table-striped"> --}}
    {{-- <thead> --}}
        {{-- <tr> --}}
            {{-- <th scope="col">#</th> --}}
            {{-- <th scope="col">Start time</th> --}}
            {{-- <th scope="col">End time</th> --}}
            {{-- <th scope="col">Start place</th> --}}
            {{-- <th scope="col">End Place</th> --}}
            {{-- <th scope="col">Stations</th> --}}
            {{-- <th scope="col">price</th> --}}
            {{-- <th>الغاء الرحله</th>
            <th>حجز الرحله</th> --}}
            
{{--             
        </tr>
        </thead>
        <tbody>
           --}}
{{dd($search)}}
            @foreach ($search as $item)
            <div class="EX-INDEX">
                <div class="EX-INDEX2">
                
                {{-- <th scope="row">{{$item['id']}}</th> --}}
                {{-- <th scope="row">1</th> --}}
                <p>Start time : {{$item['s_time']}}</p>
                <p>End time : {{$item['e_time']}}</p>
                <p>Start place : {{$item['spos']}}</p>
                <p>End place : {{$item['epos']}}</p>
                {{-- <td>{{$item['stat_place']}}</td> --}}
                <p>Price : {{$item['price']}}</p>
                
                
                

                    
                <form action="{{route('showbook.store')}}"  method="post">
                        @csrf
                        <input type="number" name="count" class="counto">
                        <input type="text" name="trip_id" value="{{$item['id']}}" hidden>
                        <input type="text" name="user_id" value="{{Auth::id()}}" hidden>
                        <input type="text" name="spos" value="{{$_GET['query']}}" hidden>
                        <input type="text" name="espos" value="{{$_GET['query1']}}" hidden>
                        <input type="text" name="driver_id" value="{{$item->driver['id']}}" hidden>
                        <input type="submit" name="submit" class="SAAAS" value="Trip Booking">
                    </form>

                {{-- <form action="{{route('trips.show',['trip'=>$item])}}" method="get">
                @csrf
                <input type="submit" name="submit" value="عرض محطات">
            </form> --}}
                </div></div>
            @endforeach
        
@endauth
@endsection