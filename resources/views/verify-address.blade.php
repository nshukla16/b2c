@extends('layouts.orderExchangeLayout')
@section('content')

<style>
  .card{
    border: 1px solid #e0dddd !important;
  }
</style>

   <div class="page-content-wrapper">
      <!-- Top Products-->
      <div class="top-products-area py-3">
        <div class="container">
             
       <div class="card w-100">
          <div class="card-body p-4">
            <div class="single-order-status active" id="order-head">
              <div class="order-text">    
              <h6>Undelivered</h6><span> on 21 Jul 2021.</span>     
              </div>        
            </div>
              <div style="float: right;">
                <i class="lni lni-headphone-alt"></i>
              </div>
          </div>
            <div class="row g-3">
            <div class="col-12 col-md-12">
              <div class="card weekly-product-card">   
             <div class="card-body d-flex align-items-center">  
                <div class="product-thumbnail-side" id="image-side">
                  <a class="product-thumbnail d-block" href=" ">
                    <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/images/item/levi.jpeg.webp" alt="">
                  </a>
                </div>
                <div class="product-description">
                  <a class="product-title d-block">Levi's Jeans</a>
                   <span>Product Description</span>
                   <br>
                   <span>Size: S</span>
                   <br>
                  <span>Order ID: OD10000026</span>
              </div>
              </div>
              <div class="order-text px-3">
                <div class="edit-profile-btn">
              <a class="btn" href="#">REMOVE/EDIT ADDRESS</a>
            </div>
             </div>
          
              </div>
            </div>
          </div>
          </div>
           <!-- card ends-->
           <br>
            <div class="single-order-status active">
              <div class="order-text">    
             <h6>Default Address</h6>
              </div>        
            </div>
         
            <div class="row justify-content-center">
      
             <div class="col-12" style="text-align: left;">
            <div class="register-form px-4 pt-4 bg-white" id="addaddress" style="height: 100%;">
            <!--    <h5 class="mb-6">Fill your Details</h5> -->
              <form action=" " method="post" id="editAddress">

                <div class="row mb-4">
                  <div class="col-sm-6" id="leftreggg">
                     <label for="name"></label>
                     <span class="required">Name</span>
                 
                  </div>
                  <div class="col-sm" id="rightregg">
                    <input class="form-control" name="name" type="text" required="required" value="Priya Saraogi" style="color: #00A79D; font-weight: bold;">
                  </div>
                  
                </div>
                  <div class="row mb-4">
                  <div class="col-sm-6" id="leftreggg">
                    <label for="address"></label>
                     <span class="required">Address</span>
                  
                  </div>
                  <div class="col-sm" id="rightreggg">
                    <textarea class="form-control" type="text" name="address" value="Office No : 914, 9th Floor I-Thum Tower-A, Sector 62, Noida, Uttar Pradesh" required="required">Office No : 914, 9th Floor I-Thum Tower-A, Sector 62, Noida, Uttar Pradesh</textarea>
                  </div>
                  
                </div>
                  <div class="row mb-4">
                  <div class="col-sm-6" id="leftreggg">
                    <label for="landmark"></label>
                     <span>Landmark</span>
                  
                  </div>
                  <div class="col-sm" id="rightreggg">
                  <input class="form-control" name="landmark" type="text" value="">
                  </div>
                  
                </div>
                    <div class="row mb-4">
                  <div class="col-sm-6" id="leftreggg">
                    <label for="state"></label>
                     <span class="required">State</span>
                  </div>
                  <div class="col-sm" id="rightreggg">
                    <select class="form-control" name="state" value="" required="required">
                      <option>Delhi</option>
                    </select>
                  </div>
                  
                </div>

                <div class="row mb-4">
                  <div class="col-sm-6" id="leftreggg">
                    <label for="city"></label>
                     <span class="required">City</span>
                  </div>
                  <div class="col-sm" id="rightreggg">
                  <select class="form-control" name="city" value="" required="required">
                    <option>Delhi</option>

                    </select>
                  </div>
                </div>

                   <div class="row mb-4">
                  <div class="col-sm-6" id="leftreggg">
                    <label for="pin"></label>
                     <span class="required">Pin Code</span>
                  </div>
                  <div class="col-sm" id="rightreggg">
                  <input class="form-control" name="pin" type="text" value="201309" id="pinCode" maxlength="6" minlength="6" onfocus="pinValidation()" required="required">
                  </div>  
                </div>

                 <div class="row mb-4">
                  <div class="col-sm-6" id="leftreggg">
                    <label for="phone"></label>
                     <span class="required">Mobile</span>
                  
                  </div>
                  <div class="col-sm" id="rightreggg">
                   <input class="input-mobile form-control" id="mobile" name="mobile" type="tel" value="8860283929" maxlength="10" minlength="10" style="color: #00A79D; font-weight: bold;" required="required">
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-sm-6" id="leftreggg">
                    <label for="type"></label>
                     <span class="required">Add. Type</span>
                  
                  </div>
                  <div class="col-sm" id="rightreggg" style="margin-top: 13px;padding-left: 17px;" required="required">
                    <input class="form-check-input" id="Home" type="radio" name="type">
                    <label class="form-check-label" id="type" for="Home">Home</label>
                    <input class="form-check-input" id="Office" type="radio" name="type">
                    <label class="form-check-label" for="Office" id="type">Office</label>
                    <input class="form-check-input" id="other" type="radio" name="type">
                    <label class="form-check-label" for="other" id="type">Other</label>
                  </div>
                  
                </div>
              
              </form>
            </div>
          </div>
        </div>        
          
        <!-- card ends-->
          <div class="card w-100">
          <div class="card-body p-4">
             <div class="edit-profile-btn">
              <a class="btn" href="#">Upload Address Proof</a>
            </div> 
            <div class="single-order-status active" id="order-head">
              <div class="order-text">
              <h6>Info related to Delivery</h6>   
                    
              </div>        
            </div>
            <div style="float: right;">
               <p id="cancelled">Policy</p>
              </div>
              <br>
               <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
               <label for="vehicle1" style="display:inline;"> I Verify I stay at this address and will be able to receive the orders here. 
               In case of return of event – Wrong Address during delivery is marked again, my profile can be suspended.</label>
          </div>
          </div>
  <!-- card ends-->
        </div>
      </div>
    </div>

@stop