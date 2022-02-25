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
              <h6>Exchange Request Submitted</h6>       
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
              <h6>Info related to your exchange</h6>       
              </div>        
            </div>
              <div style="float: right;">
                <p id="cancelled">Policy</p>
              </div>
              <br>
              <ul class="orderUl">
                <li>Please repack with original packing.</li>
                <li>Hand over the product to delivery partner.</li>
              </ul>
              <br>
              <button class="accordion">Where's my order</button>
          <div class="panel">
            <p>some info...</p>
          </div>
          <button class="accordion">I want to refunt/exchange an item</button>
          <div class="panel">
            <p>some info...</p>
          </div>
          <button class="accordion">I am unable to create return/exchange request</button>
          <div class="panel">
            <p>some info...</p>
          </div>

          </div>
          </div>
        </div>
        
      </div>
    </div>

@stop