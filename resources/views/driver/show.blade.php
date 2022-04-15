 @extends('template') 
 @section('body')
 @auth






<div class="PAPA">
          <div class="informa">
                 <div class="informa2">
                           <p class="tito">Your Trip</p>
                           <p>Start time :  {{$data['s_time']}}</p>
                            <p>End time : {{$data['e_time']}}</p>
                            <p>Start place : {{$data['spos']}}</p>
                            <p>End place : {{$data['epos']}}</p>
                            <p>Price : {{$data['price']}}</p>
                 </div></div>
    

  



      <div class="firsto">
            <div class="firsto1">
        <form method="POST" action="{{route('stations.store')}}">
               @csrf
               
               <input name="trip_id" value="{{$data['id']}}" hidden>
    
                   <select class="firsto2" name="stat_place">
                       <option value="" disabled selected >Stop Station</option>
                       <option value="El-Raya">El-Raya</option>
                       <option value="Atlas">Atlas</option>
                       <option value="EL-Mahata">EL-Mahata</option>
                       <option value="Masged El Naser">Masged El Naser</option>
                       <option value="Abas Fareed">Abas Fareed</option>
                       <option value="El-Mahkma">El-Mahkma</option>
                       <option value="El-Estad">El-Estad</option>
                       <option value="El-Redwan">El-Redwan</option>
                       <option value="El-Karor">El-Karor</option>
                       <option value="El-Meror">El-Meror</option>
                   </select>
                   <input type="time" name="timeing" class="ADDS" value="">
                             <input type="submit" class="DAF" name="submit" value="Add stations">
        </form>    
            </div>
            </div>
      @foreach ($data->stations as $item)
               <div class="firsto">
                <div class="firsto1">
           <form method="POST" action="{{route('stations.update',['station'=>$item])}}">
                   @csrf
                   @method('PUT')

                  <select class="cs-select cs-skin-border" name="stat_place">
                          <option value="{{$item['stat_place']}}" >{{$item['stat_place']}}</option>
                          <option value="El-Raya">El-Raya</option>
                          <option value="Atlas">Atlas</option>
                          <option value="EL-Mahata">EL-Mahata</option>
                          <option value="Masged El Naser">Masged El Naser</option>
                          <option value="Abas Fareed">Abas Fareed</option>
                          <option value="El-Mahkma">El-Mahkma</option>
                          <option value="El-Estad">El-Estad</option>
                          <option value="El-Redwan">El-Redwan</option>
                          <option value="El-Karor">El-Karor</option>
                          <option value="El-Meror">El-Meror</option>
                  </select>
                  <input type="time" class="PUT" id="time-start" name="timeing" value="{{$item['time']}}">
                         <input type="submit" name="submit" class="ADDS" value="Edit landing place">   
            </form>  
            
           
           <form method="POST" action="{{route('stations.destroy',['station'=>$item])}}">
                   @csrf
                   @method('DELETE')
                      <input type="submit" name="submit" class="DAFF" value="remove stations">    
           </form>
            </div></div>
</div>
</div>
@endforeach
@endauth
@endsection 