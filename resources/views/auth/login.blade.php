<!-- {{-- @extends('layouts.app') --}} -->
@extends('template')
@section('body')

<div class="container">
    {{-- {{-- <!-- <div class="justify-content-center"> -->
        <!-- <div class="col-md-8"> -->
            <!-- <div class=""> --> --}}
                {{-- <div class="card-header">{{ __('Login') }}</div> --}}




                {{-- <div class="main2"  >
                    
                 
                    <form class="form1"  method="POST" action="{{route('login')}}" >
                        @csrf
                        <p class="sign" align="center">Sign in</p>
                      <input class="un2 " type="email" align="center" placeholder="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                      <input class="un2" type="password" align="center" placeholder="Password">
                      <a class="submit" align="center" href="{{route('login')}}">Sign in</a>
                      @if (Route::has('password.request'))
                                    
                                    <p class="forgot" align="center"><a href="{{ route('password.request') }}">Forgot Password?</a></p>
                                @endif

        
                            
                                 
                 </div>  --}}



                <div class="card-body">
                    <div class="main2"  >
                    
                    <form class="form1" method="POST" action="{{ route('login') }}">
                        @csrf

                        <p class="sign" align="center">Sign in</p>
                        <div class="row mb-3">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

                            <div class="col-md-6">
                                <input id="email" type="email" class="un2 " @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

                            <div class="col-md-6">
                                <input id="password" type="password"  class="un2 " @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="reem">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div >
                                @if (Route::has('password.request'))
                                    <a  class="forgot lol" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <button  type="submit" class="submit" >
                                    {{ __('Login') }}
                                </button>

                                {{-- <a class="submit" align="center" href="{{route('login')}}">Sign in</a> --}}
                                
                               
                            </div>
                        </div>
                    </form>
                </div>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
