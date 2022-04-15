@extends('template')
@section('body')
@auth
    <form method="get" action="{{--{{route('trips.create')}}--}} /add">
    <div class="" role="group" aria-label="Basic mixed styles example">
        <button type="submit" class="sub" > Add trips</button>
      </div>
    </form>
{{--     
<a href="{{route('trips.create')}}" class="btn-btn">add</a> --}}
    <br>
    <table class="table  TAB">
        <thead>
            <tr>
                {{-- <th scope="col">#</th> --}}
                <th scope="col">Start time</th>
                <th scope="col">End time</th>
                <th scope="col">Start place</th>
                <th scope="col">End Place</th>
                {{-- <th scope="col">Stations</th> --}}
                <th scope="col">price</th>
                <th> Edit Trip</th>
                <th>Add Stations</th> 
                <th>show passenger</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                   <tr>
                    {{-- <th scope="row">{{$item['id']}}</th> --}}
                    {{-- <th scope="row">1</th> --}}
                    <td>{{$item['s_time']}}</td>
                    <td>{{$item['e_time']}}</td>
                    <td>{{$item['spos']}}</td>
                    <td>{{$item['epos']}}</td>
                    {{-- <td>{{$item['stat_place']}}</td> --}}
                    <td>{{$item['price']}}</td>
                   
                    <td>
                        <form action="{{route('trips.edit',['trip'=>$item])}}" method="get">
                            @csrf
                            <input type="submit"  class="DAF"   name="submit" value="Edit Trip">
                       </form>
                </td>
                <td>
                    <form action="{{route('showtrip')}}" method="post">
                        @csrf
                        <input type="text" name="id" value="{{$item['id']}}" hidden>
                       <input type="submit" class="ADDS" name="submit" value="Add stations">
                   </form>
            </td>
            
            <td>     <form action="shower" method="POST">
                @csrf
                <input type="text" name="id" value="{{$item['id']}}" hidden>
               <input type="submit" class="SHW" name="submit" value="show passnger">
         </form>

        </td>
                  </tr>  
                  @endforeach
                 
                </tbody>
      </table>
{{--       
      {!!$data->Links() !!} --}}
      @endauth
@endsection