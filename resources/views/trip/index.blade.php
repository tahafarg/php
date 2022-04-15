@extends('template')
@section('body')
    <table class="table table-success table-striped TAB">
        <thead>
            <tr>

                <th scope="col">Start time</th>
                <th scope="col">End time</th>
                <th scope="col">Start place</th>
                <th scope="col">End Place</th>
                <th scope="col">price</th>
                <th>status</th>
                <th>DELETE</th>
                <th>accepted</th>
                <th>rejected</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                   <tr>
                    <td>{{$item['s_time']}}</td>
                    <td>{{$item['e_time']}}</td>
                    <td>{{$item['spos']}}</td>
                    <td>{{$item['epos']}}</td>
                    <td>{{$item['price']}}</td>
                    <td>{{$item['status']}}</td>
                    <td><form action="{{route('delete',['trip'=>$item])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="submit" class="ADDS" value="delete">
                    </form>
                </td>
                <td><form method="POST" action="/accept/{{$item['id']}}">
                    @csrf 
                    @method('PUT') 
                    <input type="submit" name="submit" value="ACCEPT" class="ACPT" >
                  </form></td>
                  
                <td><form method="POST" action="/rejected/{{$item['id']}}">
                    @csrf 
                    @method('PUT') 
                    <input type="submit" name="submit" value="REJECTED" class="DAFF" >
                  </form></td>
                  </tr>  
                @endforeach
            </tbody>
      </table>




@endsection