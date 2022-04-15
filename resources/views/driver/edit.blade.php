@extends('template')
@section('body')


			<ul class="">
		   	<li >
		   		
		   		<div class="booking">
		   			<div class="">
		   				<div class="">
		   					<div class="">
								
		   						<h2>Reserve Trip With Us</h2>
			   					<p >
			   						 <a href="#" >Reserve Now</a>
			   					</p>
							
								   <br><br>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
			</ul>
		   	
		   		
	
						<div class="">
			                  	@auth
							<section>
                                <form method="POST" action="{{route('trips.update',['trip'=>$item])}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')								
								<select class="cs-select cs-skin-border"  name="spos"  value="{{$item['spos']}}">
									<option value="" disabled selected> Start Station</option>
									<option value="" disabled selected> Start Station</option>
									<option value="El-Maawkaf">El-Maawkaf</option>
									<option value="El-game3-kbeer">El-game3-kbeer</option>
									<option value="cocola-factory">cocola factory</option>
									<option value="El-RAYA">El-RAYA</option>
									<option value="Helnan-Hotel">Helnan Hotel</option>
									<option value="El-Awram">El-Awram</option>
									<option value="Aswan-club">Aswan club</option>
									<option value="El-Mahata">El-Mahata</option>
									<option value="Ramses">Ramses</option>
									<option value="Abo-Sembel">Abo-Sembel</option>
									<option value="El-Bosta">El-Bosta</option>
									<option value="game3-elnasr">game3-elnasr</option>
									<option value="Bank-masr">Bank-masr</option>
									<option value="El-shawarby">El-shawarby</option>
									<option value="El-share3-elgded">El-share3-elgded</option>
									<option value="Bank-ahly">Bank-ahly</option>
									<option value="Abas-Fareed">Abas-Fareed</option>
									<option value="EL-mahkama">EL-mahkama</option>
									<option value="Angel-church">Angel-church</option>
									<option value="Malahy">Malahy</option>
									<option value="police-hospital">police-hospital</option>
									<option value="Bank-elzra3a">Bank-elzra3a</option>
									<option value="Omarat-Taameen">Omarat-Taameen</option>
									<option value="staad">staad</option>
									<option value="El-Taameen">El-Taameen</option>
									<option value="Bank-eldam">Bank-eldam</option>
									<option value="El-Radwan">El-Radwan</option>
									<option value="El-Safa-Market">El-Safa-Market</option>
									<option value="El-Academya">El-Academya</option>
									<option value="karoor">karoor</option>
									<option value="mathaf-elNile">mathaf-elNile</option>
									<option value="mad5al-gharbSoheel">mad5al-gharbSoheel</option>
									<option value="Mafark">Mafark</option>
									<option value="AmrFareed-school">AmrFareed-school</option>
									<option value="collage">collage</option>
									<option value="ElTalg-factory">ElTalg-factory</option>
									<option value="Sahaary">Sahaary</option>



									{{-- @foreach ($stat as $item)
									<option value="{{$item['id']}}">{{$item['start_position']}}</option>   
									@endforeach --}}
								</select>
							</section>
							<br><br>
							<section>
								<select class="" name="epos"  value="{{$item['epos']}}">
									<option value="" disabled selected>end station</option>
									<option value="Sahaary">Sahaary</option>
									<option value="El-Sail">El-Sail</option>
									<option value="El-Nafaa">El-Nafaa</option>
									<option value="El-Korneesh">El-Korneesh</option>
									<option value="El-Taameen">El-Taameen</option>
									<option value="El-Maawkaf">El-Maawkaf</option>
								</select>
							</section>
							<br><br>
                            
							{{-- <section>
								<select class="cs-select cs-skin-border" name="stat_place" multiple>
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
							</section>
                             --}}

							<br><br>
						</div>
                        
						<div class="">
							<div class="">
								<label for="time-start">Time of trip start</label>
								<input type="time" class="" name="s_time"  value="{{$item['s_time']}}">
							</div>
						</div>
						<div class="">
							<div class="">
								<label for="">Time of trip end</label>
								<input type="time" class=""  name="e_time"  value="{{$item['e_time']}}">
							</div>
						</div>
                        <br>
                        <div class="">
							<div class="">
								<label for="time-end">price</label>
								<input type="text"  name="price"  value="{{$item['price']}}">
							</div>
						</div>
                        

                        <hr>
                        {{-- <h1>stations</h1> --}}
                        
                            {{-- @csrf
                            <select class="cs-select cs-skin-border" name="st_id">
                                <option value="" multiable>Stop Station</option>
                               @foreach ($data as $item)
                                <option value="{{$item['id']}}">{{$item['name']}}</option>   
                                @endforeach
                             </select>
                            <input type="text" name="price">
                            <input type="submit" name="submit" value="add" >
                        </form>
						<div class="a-col action"> --}}
							
						<div class="">
							<div class="">
								<label for="time-start">Edit</label>
								<input type="submit" class="" name="submit" value="submit">
							</div>
						</div>
		
					</form>
		
				</div>
		
	

	</div>
	<!-- END fh5co-wrapper -->
	
@endauth
@endsection