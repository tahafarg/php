@extends('template')
@section('body')
<form method="get" action="">
  <div class="btn-group" role="group" aria-label="Basic mixed styles example">
    <button type="submit" class="btn btn-success"> Add trip</button>
  </div>
</form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Phone</th>
      <th scope="col">Gender</th>
      <th scope="col">City</th>
      <th scope="col">Age</th>
      <th scope="col">Image</th>
      <th scope="col">Delete</th>
    </tr>
    <thead>
    <tbody>
      @foreach ($data as $item)
      <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['password']}}</td>
        <td>{{$item['phone']}}</td>
        <td>{{$item['gender']}}</td>
        <td>{{$item['age']}}</td>
        <td>{{$item['img']}}</td>
        <td>
          <form action="" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" name="submit" value="delete">
          </form>
        </td>

      </tr>
      @endforeach

    </tbody>
</table>
    <blockquote> Responsive Table </blockquote>
    @endsection