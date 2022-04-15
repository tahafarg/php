@extends('template')
@section('body')
{{-- <style>
    #btn{
        border-radius:10px 0 10px 0;
        margin:40px;
        width:10%;
        height:10%;
        background-color: black;
        padding:10px;
    }     
</style> --}}
{{-- </div> --}}
@auth
  <form method="post" action="/update,['ppass'=>$ppass]">
    @csrf
    @method('PUT')	
  <div style="justify-content:space-between; display:flex-box;
  margin:50px; font-size: 20px; " class="info">
  <p ><b><h1>Edit Your Profile</h1></b></p>
              <input class="fname" type="text" name="name" placeholder="Full name" >
              <input type="text" name="email" placeholder="Email">
              <input type="text" name="phone" placeholder="Phone number">
              <input type="password" name="password" placeholder="Password">
              <input type="age" name="age" placeholder="Age">
              <select name="gender">
                <option value="Gender" selected>Gender</option>
                <option value="male">Male</option>
                <option value="male">Female</option>
                </select>
            
<button type="submit" id="btn" class="btn btn-primary">Save</button>

  </form>
@endauth
@endsection
