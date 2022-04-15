@extends('template')
@section('body')
<main id="main">

  
    
    </main><!-- End #main -->
    
    <!-- ======= Footer ======= -->
    <footer id="footer">
    
    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
           <div class="baack">
            <form class="main3" action="{{route('driver.store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="title">
                  <i class="fas fa-pencil-alt"></i> 
                  <p class="sign3" >Sign Up</p>
                </div>
                <div class="">
                  <input  type="text" name="name"  class="un33"  placeholder="Full name" >
                  @error('name')
                                    <div  role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                  
                  <input type="text" name="email" placeholder="Email" class="un33 here" >
                  @error('email')
                                    <div  role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                  <input type="text" name="phone" placeholder="Phone number" class="un33" >
                  @error('phone')
                  <div  role="alert">
                      <strong>{{ $message }}</strong>
                  </div>
              @enderror
                  <input type="password" name="password" placeholder="Password" class="un33 here" >
                  @error('password')
                  <div  role="alert">
                      <strong>{{ $message }}</strong>
                  </div>
              @enderror
              
                  <input type="age" name="age" placeholder="Age" class="un33" >
                  @error('age')
                  <div  role="alert">
                      <strong>{{ $message }}</strong>
                  </div>
              @enderror
                  <input type="carnum" name="carnum" placeholder="Car Number" class="un33" >
                  @error('carnum')
                  <div  role="alert">
                      <strong>{{ $message }}</strong>
                  </div>
              @enderror
                 
                  <select name="gender" class="un33"   placeholder="Gender">
                            <option name="gender" value="gender" selected>Gender</option>
                            <option value="Male">Male</option>
                            
                          </select>
                          @error('gender')
                          <div  role="alert">
                              <strong>{{ $message }}</strong>
                          </div>
                      @enderror

                          <select name="city" class="un33"   placeholder="city">
                            <option name="city" value="City" selected>city</option>
                            <option value="aswan">Aswan</option>
                            
                          </select>
                          @error('city')
                          <div  role="alert">
                              <strong>{{ $message }}</strong>
                          </div>
                      @enderror
                <br><br>
                
                <!--upload national phohto-->
    
                <div class="container">
                  <h3  align="center">Upload Your ID Card</h3>
                  <div class="avatar-upload">
                      <div class="avatar-edit">
                        <input type='file' id="imageUpload" name="idcard" class="un3"    />
                          <label for="imageUpload">
                            {{-- <img src="/storage/{{$filePath['img']}}" height="50px"/> --}}
                          </label>
                          @error('idcard')
                            <div  role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                          
                      </div>
                      {{-- <div class="avatar-preview">
                          <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                          </div>
                      </div> --}}
                  </div>
              </div>
                
                
                
                
                
                
                  <!--upload profile phohto-->
    
                  <div class="container">
                    <h3  align="center">Upload Your Personal Image</h3>
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' id="imageUpload" name="personalImage" class="un3"  />
                            <label for="imageUpload"></label>
                            @error('personalImage')
                            <div  role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                        </div>
                        {{-- <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                            </div>
                        </div> --}}
                    </div>
                </div>
                
                
                
                
                
                
                
                
                <!--upload drive license-->
                <div class="container">
                  <h3  align="center">Upload Drive License</h3>
                  <div class="avatar-upload">
                      <div class="avatar-edit">
                          <input type='file' id="imageUpload" name="drivelicense" class="un3"   />
                          <label for="imageUpload"></label>
                          @error('drivelicense')
                          <div  role="alert">
                              <strong>{{ $message }}</strong>
                          </div>
                      @enderror
                      </div>
                      
                      {{-- <div class="avatar-preview">
                          <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                          </div>
                      </div> --}}
                  </div>
              </div>
    
    
    
    
    
               <!--upload Car license-->
                       
               <div class="container">
                <h3  align="center">Upload car License</h3>
                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type='file' id="imageUpload" name="carlicense"  class="un3" />
                        <label for="imageUpload"></label>
                        @error('carlicense')
                        <div  role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                    </div>
                    {{-- <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                        </div>
                    </div> --}}
                </div>
            </div>
       
    
    
    
    
         <!--upload drug analysis-->
         
         <div class="container">
          <h3 align="center">Upload drug analysis</h3>
          <div class="avatar-upload">
              <div class="avatar-edit">
                  <input type='file' id="imageUpload" name="drugAnalaysis"  class="un3" />
                  <label for="imageUpload"></label>
                  @error('drugAnalaysis')
                  <div  role="alert">
                      <strong>{{ $message }}</strong>
                  </div>
              @enderror
              </div>
              {{-- <div class="avatar-preview">
                  <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                  </div>
              </div> --}}
          </div>
      </div>
    
              </div>
                <div class="boxy">
                    <input type="checkbox" name="checkbox"  ><span> I agree to the <a href="https://www.w3docs.com/privacy-policy">Privacy Policy for الموقف.</a></span>
                    @error('checkbox')
                  <div  role="alert">
                      <strong>{{ $message }}</strong>
                  </div>
              @enderror
                </div>
                <button type="submit" href="/"  class="submit3">Sign up</button>
                                      
            </form>
           </div>
        </div>
      </div>
    </div>
    
    @endsection
    