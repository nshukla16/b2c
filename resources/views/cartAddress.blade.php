@extends('layouts.cartAddressLayout')
@section('content')
  
  <div class="page-content-wrapper">
      <div class="container">
      
        <div class="profile-wrapper-area py-3">
       
          <div class="card bg-white">
            <div class="card-body d-flex align-items-center">
              <div class="row" style="width: 100%;">
                @foreach($userDetails as $key=>$user)
                <div class="col-10">
                  <div class="user-info">
                      <p class="mb-0"><strong style="color: #00A79D;">{{$user->name}}</strong>  (Default)</p>
                      <!-- <p class="mb-0">Office No : 914, 9th Floor I-Thum Tower-A, Sector 62, Noida, Uttar Pradesh</p> -->
                      <p class="mb-0">{{$user->add_details}} {{$user->city}} {{$user->state}} {{$user->pincode}}</p>
                      <p>Mobile: <strong style="color: #00A79D;">{{$user->mobile}}</strong></p>
                    
                  </div>
                </div>
                <div class="col-2">
                 <ul class="donate-now">
                  <li>
                    <input type="radio" id="home" name="address" />
                    <label for="home">{{$user->add_type}}</label>
                  </li> 
                 </ul>
                </div>
                @endforeach
              </div>
            </div>
            <div class="edit-profile-btn">
              <a class="btn" href="#">ADD/EDIT ADDRESS</a>
            </div>
          </div>          
        </div>
        <span>Delivery Estimates</span>

        <div class="card user-data-card">
            <div class="card-body">
              @foreach($getaddcart as $key=>$cart)
              <div class="single-profile-data d-flex align-items-center justify-content">
                <div class="title d-flex align-items-center" id="imgDiv">
                  <img id="imgCart" src="http://34.72.9.224/quickWebsite/b2c_admin/{{$cart->img_url}}">
                </div>
                 <div class="title d-flex align-items-center" id="estimateDiv">
                <div id="estimated">Estimated delivery by <strong>2021</strong></div>
              </div>
              </div>
              <!-- <div class="single-profile-data d-flex align-items-center justify-content">
                <div class="title d-flex align-items-center" id="imgDiv">
                  <img id="imgCart" src="http://34.72.9.224/quickWebsite/b2c_admin/public/images/item/levi.jpeg.webp">
                </div>
             <div class="title d-flex align-items-center" id="estimateDiv">
                <div id="estimated">Estimated delivery by <strong>2021</strong></div>
              </div>
              </div> -->
              @endforeach
            </div>
          </div>
      </div>
    </div>


@stop