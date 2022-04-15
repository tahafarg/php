    @extends('template')
    @section('body')
    <table class="table table-success table-striped TAB">
        <thead>
            <tr>
                {{-- <th scope="col">#</th> --}}
                <th scope="col">name</th>
                <th scope="col">email</th>
                {{-- <th scope="col">password</th> --}}
                <th scope="col">phone</th>
                {{-- <th scope="col">Stations</th> --}}
                <th scope="col">age</th>
                <th>gender</th>
                <th>city</th>
                <th>status</th>
                <th>delete</th>
                <th>show</th>
                <th>accepted</th>
                {{-- <th>rejected</th> --}}
                {{-- <th>rejacted</th> --}}
                {{-- <th>تعديل الرحله</th>
                <th>اضافه محطات</th>  --}}
            </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                   <tr class="HOV">
                    {{-- <th scope="row">{{$item['id']}}</th> --}}
                    {{-- <th scope="row">1</th> --}}
                    <td >{{$item->User['name']}}</td>
                    <td>{{$item->User['email']}}</td>
                    {{-- <td>{{$item->User['password']}}</td> --}}
                    <td>{{$item->User['phone']}}</td>

                    {{-- <td>{{$item['stat_place']}}</td> --}}
                    
                    <td>{{$item->User['age']}}</td>
                    <td>{{$item->User['gender']}}</td>
                    <td>{{$item->User['city']}}</td>
                    <td>{{$item->User['status']}}</td>   
                    <td>
                        <form action="{{route('delete2',['pass'=>$item])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="submit" class="DAFF" value="delete">
                    </form></td>
                    <td>
                    <form action="{{route('show',['pass'=>$item])}}" method="get">
                        @csrf
                        <input type="submit" name="submit" class="ADDS" value="show">
                    </form>

               </td>
            
              
               <td>
                <form method="POST" action="{{route('peind',['item'=>$item])}}">
                @csrf
                @method('PUT')
                <input type="submit" class="SAAAS" name="accept" value="accept">
                </form>
               </td>

             
                @endforeach
            </tbody>
      </table>




@endsection