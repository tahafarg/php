@extends('template')
@section('body')
    <table class="table table-success table-striped TAB">
        <thead>
            <tr>
                {{-- <th scope="col">#</th> --}}
                <th scope="col">driver id</th>
                <th scope="col">user id</th>
                <th scope="col">trip id</th>
                <th scope="col">status</th>
                <th>accepted</th>
                <th>rejacted</th>
                <th>aces</th>
                <th>done</th>
                <th>not done</th>
                <th>delete</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                   <tr>
                    <td>{{$item['driver_id']}}</td>
                    <td>{{$item['user_id']}}</td>
                    <td>{{$item['trip_id']}}</td>
                    <td>{{$item['status']}}</td>
                    {{-- <td>{{$item['acsepted']}}</td>
                    <td>{{$item['rejacted']}}</td>
                    
                    <td>{{$item['done']}}</td>
                    <td>{{$item['not_done']}}</td>
                 --}}
                    <td><form method="POST" action="/acse/{{$item['id']}}">
                      @csrf 
                      @method('PUT') 
                      <input type="submit" name="submit" value="ACCEPT" class="btn btn-success" >
                    </form></td>
                
                
                  
                <td><form method="POST" action="/reje/{{$item['id']}}">
                    @csrf 
                    @method('PUT') 
                    <input type="submit" class="DAF" name="submit" value="REJECTED" class="btn btn-denger" >
                  </form></td>
                  <td>{{$item['aces']}}</td>  
               
                <td><form method="POST" action="/done/{{$item['id']}}">
                    @csrf 
                    @method('PUT') 
                    <input type="submit" class="DAF"  name="submit" value="done" class="btn btn-success" >
                  </form></td>
                  
                <td><form method="POST" action="/not_done/{{$item['id']}}">
                    @csrf 
                    @method('PUT') 
                    <input type="submit" name="submit" class="DAF"  value="not done" class="btn btn-denger" >
                  </form></td>
                
              
                  <td>
                    <form action="{{route('delete3',['book'=>$item])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="DAF"  name="submit" value="delete">
                </form>
             </td>
                
                </tr>  
                  
                @endforeach
            </tbody>
      </table>



@endsection