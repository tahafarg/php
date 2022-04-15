@extends('template')
@section('body')
<div class="WART">
    
         <div class="WART2">
                   <form class="form" method="POST" action="{{route('register')}}">
                        @csrf
                        <p class="sign" align="center">Sign Up</p>
                          {{-- name  --}}
                        <div class="FRSTDIV">

                            <div class="">
                                <input id="name" class="un" type="text" align="center" placeholder="Name"
                                @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        


                                      {{-- phone  --}}

                        
 
                            <div class="">
                                <input id="phone" type="text" class="un" type="text" align="center" placeholder="Phone"
                                @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                                 {{-- age  --}}
                        
                            <div class="">
                                <input  name="age" id="age" type="text" class="un" type="text" align="center" placeholder="Age">

                                {{-- @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        
                        
                                      {{-- email  --}}
                        <div class="">
                              <input class="un" type="email" align="center" placeholder="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                             @error('email')
                               <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                </span>
                 
                                @enderror
                        </div>
                       


                          {{-- password  --}}
                        
                            <div class="">
                            <input class=" un" type="password" align="center" placeholder="Password"@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            {{-- confirm pass  --}}
                           
                            <div class="">
                                <input id="password-confirm" type="password" class="un" type="text" align="center" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        
                            <div class="SELECTO">
                                <div class="SELECTO1">
                        <select name="gender"  align="center" placeholder="Gender">
                            <option name="gender" value="gender" selected>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                                </div>
                                <div class="SELECTO1">
                          <select name="city" align="center" placeholder="city">
                            <option name="city" value="City" selected>city</option>
                            <option value="aswan">Aswan</option>
                          </select>
                                </div>


                         </div>
                        <div class="">
                            <div class="boxy">
                                <input type="checkbox" name="checkbox"><span> I agree to the <a href="https://www.w3docs.com/privacy-policy">Privacy Poalicy for الموقف.</a></span>
                              </div>
                  
                            <div class="">
                                
                                <button type="submit" class="SUMTO2">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>
            </div>
        </div>
 
@endsection
