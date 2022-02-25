@extends('layouts.returnOrderLayout')
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
              <h6>Return Request Submitted</h6>       
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
            <div class="single-order-status active" id="order-head">
              <div class="order-text">    
              <h6>Info related to your Return</h6>       
              </div>        
            </div>
              <div style="float: right;">
                <p id="cancelled">Policy</p>
              </div>
              <br>
              <p>Product will be picked up by 15 Jul 2021.</p>
            
              <ul class="orderUl">
                <li>Please repack with original packing.</li>
                <li>Hand over the product to delivery partner.</li>
              </ul>
          </div>
          </div>
          <!-- main card ends-->
          <div class="card w-100">
          <div class="card-body p-4">
            <div class="single-order-status active">
              <div class="order-text">    
              <h6>Refund Amount ₹ 439</h6>       
              </div>        
            </div>
          </div>
          </div>
          <!-- price ends-->
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