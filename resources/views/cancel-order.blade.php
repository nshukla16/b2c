@extends('layouts.cancelOrderLayout')
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
              <h6>Ready to ship</h6><span>Will be shipped on 31 Jul 2021.</span>     
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
          
              </div>
            </div>
          </div>
          </div>
           <!-- card ends-->
           <div class="card w-100">
          <div class="card-body p-4">
            <div class="single-order-status active">
              <div class="order-text">    
              <h6>Reason for cancellation</h6>       
              </div>        
            </div>
            <br>
           <p>Please tell us correct reason for cancellation. This information is only used to improve our service.</p>
              <br>
              <p>Select Reason</p>
             <input type="radio" id="reason1" name="reason" value="">
             <label for="reason1">Incorrect Size ordered</label><br>
             <input type="radio" id="reason2" name="reason">
             <label for="reason2">Product not required anymore.</label><br>
             <input type="radio" id="reason3" name="reason">
             <label for="reason3">Ordered by mistake.</label><br>
             <input type="radio" id="reason4" name="reason">
             <label for="reason4">Duplicate order.</label><br>
             <input type="radio" id="reason5" name="reason">
             <label for="reason5">Wants to change style/color.</label>
             <br>
             <br>
             <textarea class="form-control" placeholder="Additional Comments"></textarea>

          </div>
          </div>
          <!-- card 2 ends-->
           <div class="card w-100">
          <div class="card-body p-4">
            <div class="single-order-status active">
              <div class="order-text">    
              <h6>Refund Amount ₹ 439</h6>       
              </div>        
            </div>
          </div>
          </div>
          <!-- card 3 ends-->
          <div class="card w-100">
          <div class="card-body p-4">
           <ul class="orderUl">
             <li>You will get refund in 7-10 business days.</li>
             <li>Refund can only be transferred to original source.</li>
           </ul>
          </div>
          </div>
          <!-- card 3 ends-->
        </div>
        
      </div>
    </div>

@stop