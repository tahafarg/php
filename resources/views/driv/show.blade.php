@extends('template')
@section('body')
    <table class="table table-success table-striped TAB">
        <thead>
            <tr>
                {{-- <th scope="col">#</th> --}}
                <th scope="col">idcard</th>
                <th scope="col">carnum</th>
                <th scope="col">personalImage</th>
                <th scope="col">driverLicense</th>
                {{-- <th scope="col">Stations</th> --}}
                {{-- <th scope="col">age</th> --}}
                <th>carLicense</th>
                <th>drugAnalaysis</th>
                <th>delete</th>
                {{-- <th>show</th> --}}
                {{-- <th>acsepted</th>
                <th>rejacted</th> --}}
                {{-- <th>تعديل الرحله</th>
                <th>اضافه محطات</th>  --}}
            </tr>
            </thead>
            <tbody>
                {{-- <td> 
                    <img src="{{ asset('uploads/'DIRECTORY_SEPARATOR. $item['idcard'] )}}" width="50px" height="50px">
                  </td> --}}
                   <tr>
                    {{-- <th scope="row">{{$item['id']}}</th> --}}
                    {{-- <th scope="row">1</th> --}}
                    <td>{{$item['idcard']}}</td>
                    <td>{{$item['carnum']}}</td>
                    <td>{{$item['personalImage']}}</td>
                    <td>{{$item['driverLicense']}}</td>
                    <td>{{$item['carLicense']}}</td>
                    <td>{{$item['drugAnalaysis']}}</td>
                    {{-- <td>{{$item['city']}}</td> --}}
                      {{-- <td>{{$item['stat_place']}}</td> --}}
                    <td>
                        <form action="/delete3,['pass'=>$item]" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="submit" class="DAFF" value="delete">
                    </form>
                    {{-- <form action="/show,['trip'=>$item]" method="get">
                        @csrf
                        <input type="submit" name="submit" value="show">
                    </form> --}}
                {{-- </td>
                <td><form method="POST" action="/accept/{{$item['id']}}">
                    @csrf 
                    @method('PUT') 
                    <input type="submit" name="submit" value="ACCEPT" class="btn btn-success" >
                  </form></td>
                  
                <td><form method="POST" action="/rejected/{{$item['id']}}">
                    @csrf 
                    @method('PUT') 
                    <input type="submit" name="submit" value="REJECTED" class="btn btn-denger" >
                  </form></td>
                  </tr>   --}}
            </tbody>
      </table>



@endsection