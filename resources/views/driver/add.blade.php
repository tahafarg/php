@extends('template')
@section('body')

		   					<div class="">
								
		   						<h2 class="resv">Reserve Trip With Us</h2>
			   					{{-- <p > --}}
			   						 {{-- <a href="#" class="" id="">Reserve Now</a> --}}
			   					{{-- </p> --}}
							
								   <br><br>
		   					</div>		
					{{-- <form action="#"> --}}
                      <div class="FORMA" >
						<div class="FRM">
							<div  class="SPPOS" >
				              	@auth
								<section class="SPPOS2" >
                        <form method="POST" action="{{route('trips.store')}}">
							@csrf								
								<select class=""  name="spos">
									<option value="" disabled selected> Start Station</option>
									<option value="El-Maawkaf">El-Maawkaf</option>
									<option value="El-game3-kbeer">El-game3-kbeer</option>
									<option value="cocola-factory">cocola factory</option>
									<option value="El-RAYA">El-RAYA</option>
									<option value="Helnan-Hotel">Helnan Hotel</option>
									<option value="El-Awram">El-Awram</option>
									<option value="Atlas">Atlas</option>
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
									<option value="game3-gozayra">game3-gozayra</option>
									<option value="makhbaz-gozayra">makhbaz-gozayra</option>
									<option value="Masged-3omaratGozayra">Masged-3omaratGozayra</option>
									<option value="Omarat-eskanMomayz">Omarat-eskanMomayz</option>
									<option value="Masged-ELsahaba">Masged-ELsahaba</option>
									<option value="Masged-ELrahma">Masged-ELrahma</option>
									<option value="Second-mall">Second-mall</option>
									<option value="ELmostashfa">ELmostashfa</option>
									<option value="ELAlban">ELAlban</option>
									<option value="ELMostaqbal-school">ELMostaqbal-school</option>
									<option value="ELsail">ELsail</option>
									<option value="Eshara">Eshara</option>
									<option value="ELmasrya-sail">ELmasrya-sail</option>
									<option value="ELMror">ELMror</option>



									{{-- <option value="El-Sail">El-Sail</option>
									<option value="El-Nafaa">El-Nafaa</option>
									<option value="El-Korneesh">El-Korneesh</option>
									<option value="El-Mahmodya">El-Mahmodya</option>
									  <option value="Tameen">Tameen</option>
									  <option value="sahaary">sahaary</option>
									  <option value="karoor">karoor</option>
									 
									--}}
									{{-- @foreach ($stat as $item)
									<option value="{{$item['id']}}">{{$item['start_position']}}</option>   
									@endforeach --}}
								</select>
							</section>
							
							<section class="SPPOS2">
								<select class="" name="epos">
									<option value="" disabled selected>end station</option>
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



								</select>
							</section>
						</div>
							
                            
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

						
						
                        
						<div class="TIME">
							<div class="">
								<label for="time-start">Time of trip start</label>
								<input type="time" class="INTIME" id="" name="s_time">
							</div>
						</div>
						<div class="TIME">
							<div class="">
								<label for="time-end">Time of trip end</label>
								<input type="time" class="INTIME" id="" name="e_time">
							</div>
						</div>
                        
                        <div class="TIME">
							<div class="">
								<label for="time-end">price</label>
								<input type="text" class="INTIME  PRICEE" id="" name="price" >
							</div>
						</div>
                        

                        
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

								<input type="submit" class="OKAY" name="submit" value="submit">
							
							</div>
						</div>
					</form>

				</div>
			</div>
			@endauth
@endsection