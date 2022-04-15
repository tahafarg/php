@extends('template')
@section('body')
@auth

@foreach($data as $item)

<div class="informaton">
    <div class="informaton2">      
      <p class="parag">Start station : {{$item->spos['stat_place']}}</p>
      <p class="parag">End station : {{$item->espos['stat_place']}}</p>
      <p class="parag">Count : {{$item['count']}}</p>
    
     
  </div></div>
  


@endforeach
@endauth
@endsection