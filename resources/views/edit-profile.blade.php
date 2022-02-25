@extends('layouts.profile_layout')
@section('content')

<!-- Login Wrapper Area-->
    <div class="login-wrapper d-flex align-items-center justify-content-center text-center">
      <!-- Background Shape-->
      <div class="container">
      
         @foreach($user as $key=>$value)
        <div class="row justify-content-center">
          <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-6" style="text-align: left;">
          <form action="updateProfile" enctype="multipart/form-data" method="post" id="profileForm">
          @csrf
           <div class="card user-info-card bg-white" id="profileCard">
            <div class="card-body p-4 d-flex align-items-center justify-content-center">
              <div class="user-profile me-3">
                <img src="http://34.72.9.224/quickWebsite/b2c/public/img/{{$value->img_path}}" id="preview_img" alt="" style="width: 100px; height: 100px;">
                <div class="change-user-thumb">
                  <!-- <form> -->
                    <input class="form-control-file" type="file" name="image" id="profile_image" onchange="loadPreview(this);">
                    <button onclick="img()"><i class="lni lni-pencil"></i></button>
                    
                  <!-- </form> -->
                </div>
              </div>
              <img  src="" class="" width="100" height="100" style="display: none">
              
            </div>
            <br>
            <div class="user-info text-center">
                <p class="mb-0"><strong>{{$value->mobile}}</strong></p>
              </div>
          </div>
            <!-- Register Form-->
            <div class="register-form mt-3 px-4" id="editProfile">
            <!--    <h5 class="mb-6">Fill your Details</h5> -->

                <div class="row mb-4">
                  <div class="col-sm-6" id="leftreg">
                     <label for="username"><i class="lni lni-user"></i></label>
                     <span class="required">Name</span>
                 
                  </div>
                  <div class="col-sm" id="rightreg">
                    <input class="form-control" id="username" name="name" type="text" value="{{$value->name}}" required="required">
                  </div>
                  
                </div>
                 <div class="row mb-4">
                  <div class="col-sm-6" id="leftreg">
                     <label for="email"><i class="lni lni-envelope"></i></label>
                     <span class="required">Email</span>
                 
                  </div>
                  <div class="col-sm" id="rightreg">
                   <input class="form-control" id="email" type="email" name="email" placeholder="Enter Email Id" value="{{$value->email}}" pattern="([-!#-'*+/-9=?A-Z^-~]+(\.[-!#-'*+/-9=?A-Z^-~]+)*|([]!#-[^-~ \t]|(\\[\t -~]))+)@[0-9A-Za-z]([0-9A-Za-z-]{0,61}[0-9A-Za-z])?(\.[0-9A-Za-z]([0-9A-Za-z-]{0,61}[0-9A-Za-z])?)+" required="required">
                  </div>
                  
                </div>
                 <div class="row mb-4">
                  <div class="col-sm-6" id="leftreg">
                    <label for="gender"><i class="fa fa-transgender-alt"></i></label>
                     <span class="required">Gender</span>
                  
                  </div>
                  <div class="col-sm" id="rightreg" style="margin-top: 13px;padding-left: 17px;">
                    @if($value->gender=='M')
                      <input class="form-check-input" id="male" type="radio" name="gender" value="M" checked required="required">
                    @else
                      <input class="form-check-input" id="male" type="radio" name="gender" value="M" required="required">
                    @endif
                    <label class="form-check-label" id="genders" for="male">M</label>
                    @if($value->gender=='F')
                      <input class="form-check-input" id="female" type="radio" name="gender" value="F" checked required="required">
                    @else
                      <input class="form-check-input" id="female" type="radio" name="gender" value="F" required="required">
                    @endif
                    <label class="form-check-label" for="female" id="genders">F</label>
                    @if($value->gender=='O')
                      <input class="form-check-input" id="other" type="radio" name="gender" value="O" checked required="required">
                    @else
                      <input class="form-check-input" id="other" type="radio" name="gender" value="O" required="required">
                    @endif
                    <label class="form-check-label" for="other" id="genders">Other</label>
                  </div>
                  
                </div>
                   <div class="row mb-4">
                  <div class="col-sm-6" id="leftreg">
                    <label for="phone"><i class="lni lni-phone"></i></label>
                     <span>Alt no.</span>
                  
                  </div>
                  <div class="col-sm" id="rightreg">
                   <input class="input-mobile form-control" id="phone" name="alt_no" type="tel" value="{{$value->alt_no}}" placeholder="Alternate Mobile No" maxlength="10" minlength="10" onfocus="mobileValidation()">
                  </div>
                  
                </div>
                       <div class="row mb-4">
                  <div class="col-sm-6" id="leftreg">
                    <label for="address"><i class="lni lni-map-marker"></i></label>
                     <span>Address</span>
                  
                  </div>
                  <div class="col-sm" id="rightreg">
                 <textarea rows="3" class="form-control" id="address" placeholder="Enter Your Address" name="address" value="{{$value->address}}" style="height: 60px;">{{$value->address}}</textarea>
                  </div>
                  
                </div>
                   <div class="row mb-4">
                  <div class="col-sm-6" id="leftreg">
                    <label for="landmark"><i class="lni lni-map"></i></label>
                     <span>Landmark</span>
                  
                  </div>
                  <div class="col-sm" id="rightreg">
                   <input class="form-control" id="Landmark" name="landmark" value="{{$value->landmark}}" type="text" placeholder="Enter Landmark">
                  </div>
                  
                </div>
                   <div class="row mb-4">
                  <div class="col-sm-6" id="leftreg">
                    <label for="state"><i class="lni lni-map-marker"></i></label>
                     <span>State</span>
                  
                  </div>
                  <div class="col-sm" id="rightreg">
                    <select class="form-control" id="state" name="state" onchange="selectState(this.value)">
                      <option selected="selected" disabled="true">Select State</option>
                      @foreach($state as $key=>$stat)
                        <option <?php if($value->state==$stat->state){echo 'selected';}?>>{{$stat->state}}</option>
                      @endforeach
                    </select>
                  </div> 
                </div>

                  <div class="row mb-4">
                  <div class="col-sm-6" id="leftreg">
                    <label for="city"><i class="lni lni-map-marker"></i></label>
                     <span>City</span>
                  
                  </div>
                  <div class="col-sm" id="rightreg">
                    <select class="form-control" id="city" name="city">
                    @foreach($listCity as $key=>$listcity)

                      <option <?php if($value->city==$listcity->district){echo 'selected';}?>>{{$listcity->district}}</option>
                    @endforeach
                    </select>
                  </div> 
                </div>

                  <div class="row mb-4">
                  <div class="col-sm-6" id="leftreg">
                    <label for="pin"><i class="lni lni-pin"></i></label>
                     <span>Pin</span>
                  
                  </div>
                  <div class="col-sm" id="rightreg">
                   <input class="form-control" id="pin" name="pin" type="text" value="{{$value->pincode}}" placeholder="Input Pin Code" maxlength="6" minlength="6" onfocus="pinValidation()">
                  </div>
                  
                </div>          
        
               <button class="btn btn-success btn-lg w-100" type="submit" id="submit-profile" style="display:none;">Submit</button>
               <br>
                 @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
        @endif
              </form>
            </div>
            <!-- Login Meta-->
          <!--   <div class="login-meta-data">
              <p class="mt-3 mb-0">Already have an account?<a class="ms-1" href="login">Sign In</a></p>
            </div> -->
          </div>
        </div>
           @endforeach
      </div>
    </div>
 <script>
  function loadPreview(input, id) {
    id = id || '#preview_img';
    if (input.files && input.files[0]) {
        var reader = new FileReader();
 
        reader.onload = function (e) {
          // $("#preview_img").show();
            $(id)
                    .attr('src', e.target.result);
        };
 
        reader.readAsDataURL(input.files[0]);
    }
 }

$("#cat_image").change(function(){
    readURL(this);
});
  function selectState(arg) {
    // body...
    $.ajax({
      type:'POST',
      url:'{{url('selectCity')}}',
      data:{'arg':arg},
      headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
      success:function(result){
        console.log(result);
        $("#city").html(result);
      }
    });
  }


  var phone = document.getElementById('phone').value;
   function mobileValidation(phone) {
  //called when key is pressed in textbox
  $("#phone").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
  
               return false;
    }
   })
 }

   var pinCode = document.getElementById('pin').value;
   function pinValidation(pinCode) {
  //called when key is pressed in textbox
  $("#pin").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
  
               return false;
    }
   })
 }

    function img() {
        // body...a
        alert("hola");
      }

 </script>

    @stop
    