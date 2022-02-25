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
              <h6>Delivered</h6><span> on 21 Jul 2021.</span>     
              </div>        
            </div>
              <div style="float: right;">
                <a href="contact"><i class="lni lni-headphone-alt"></i></a>
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
              <div class="order-text px-3" style="display:flex;">
              <p style="font-size: 12px;">Eligible for Return/Exchange till 29 Jul 2021</p>
              <div>
              <p style="color:red;font-size: 12px;">Policy</p>
            </div>
          </div>
          
              </div>
            </div>
          </div>
          </div>
           <!-- card ends-->

           <div class="card w-100">
          <div class="card-body p-4">
            <div class="single-order-status active">
              <div class="order-text">    
              <h6>Select Replacement Size</h6>
              <span>Original Size: S</span>
              </div>        
            </div>
            <br>
            <div class="sizeInput">
             <input type="radio" id="reason1" name="reason">
             <label class="size" for="reason1">XS</label><br>
             <input type="radio" id="reason2" name="reason">
             <label class="size" for="reason2">S</label><br>
             <input type="radio" id="reason3" name="reason">
             <label class="size" for="reason3">M</label>
             <input type="radio" id="reason4" name="reason">
             <label class="size" for="reason4">L</label>
             </div>          
          </div>
          </div>
           <!-- card ends-->

           <div class="card w-100">
          <div class="card-body p-4">
            <div class="single-order-status active">
              <div class="order-text">    
              <h6>Reason for Exchange</h6>       
              </div>        
            </div>
            <br>
             <input type="radio" id="reason1" name="reason" value="">
             <label for="reason1">I received a wrong/defective product</label><br>
             <input type="radio" id="reason2" name="reason">
             <label for="reason2">Size is too large</label><br>
             <input type="radio" id="reason3" name="reason">
             <label for="reason3">Size is too small</label>           
          </div>
          </div>
          <!-- card 2 ends-->
             <div class="card w-100">
          <div class="card-body p-4">
            <div class="single-order-status active">
              <div class="order-text">    
           <input type="checkbox" id="check" name="check" value="">
            <label for="check" style="display: inline;">I confirm that the product is unused with original tags</label>       
              </div>         
            </div>
                <br>
             <ul class="orderUl">
                <li>Please repack with original packing </li>
                <li>Hand over the product to delivery partner.</li>
              </ul> 
          </div>
          </div>
          <!-- ends-->

          <div class="card w-100">
          <div class="card-body p-4">
            <div class="single-order-status active">
              <div class="order-text">    
              <p>Pickup Address</p>
              <h6>Priya Saraogi</h6>
              <p>101, New ashok Nagar</p>
              <p>Mobile: 9999999999</p>
              <p style="color: red;">Note: Pick Up Address cannot be changed</p>      
              </div>        
            </div>
          </div>
          </div>

        </div>
        
      </div>
    </div>

@stop