@extends('template')
@section('body')
    <table class="table table-success table-striped TAB">
        <thead>
            <tr>
                {{-- <th scope="col">#</th> --}}
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">password</th>
                <th scope="col">phone</th>
                {{-- <th scope="col">Stations</th> --}}
                <th scope="col">age</th>
                <th>gender</th>
                <th>city</th>
                <th>delete</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                   <tr>
                    <td>{{$item['name']}}</td>
                    <td>{{$item['email']}}</td>
                    <td>{{$item['password']}}</td>
                    <td>{{$item['phone']}}</td>
                    
                    <td>{{$item['age']}}</td>
                    <td>{{$item['gender']}}</td>
                    <td>{{$item['city']}}</td>
                    <td><form action="{{route('delete1',['item'=>$item])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="submit" class="DAFF" value="delete">
                    </form>
                @endforeach
            </tbody>
      </table>

@endsection