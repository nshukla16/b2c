@extends('layouts.undeliveredOrderLayout')
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
              <h6>Undelivered</h6>     
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
            <div class="single-order-status active"  id="order-head">
              <div class="order-text">    
              <h6>Info related to Delivery</h6>       
              </div>        
            </div>
              <div style="float: right;">
                <p id="cancelled">Policy</p>
              </div>
              <br>
              <ul class="orderUl">
                <li>Delivery partner attempted multiple deliveries to your address and was unable to deliver the Product.</li>
                <li>Please check the Reason in Order timeline below.</li>
                <li>Your request to Refund has been initiated and will be initiated soon.</li>
                <li>You will get refund in 7-10 business days.</li>
                <li>Refund can only be transferred to original source.</li>
              </ul>
              
          </div>
          </div>
          <!-- card ends-->
            <div class="card w-100">
          <div class="card-body p-4">
            <div class="single-order-status active"  id="order-head">
            <p>Refund is not applicable on COD orders. You will receive an email/SMS shortly for confirmation.</p>
            <!-- if online paid-->
               <div class="order-text">    
             <!--  <h6>Refund Amount ₹ 430</h6> -->       
              </div>     
            </div>              
          </div>
          </div>
          
          <div class="my-order-wrapper pt-3">
        <div class="card w-100">
          <div class="card-body p-4">
            <!-- Single Order Status-->
            <div class="single-order-status active">
            <div class="order-status"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
            <circle cx="8" cy="8" r="8"/></svg>
              </div>
              <div class="order-text">
                <h6>Shipped<span>Thu, 29 Jul 2021</span></h6>
                <span>EKART Logistics- FMPP0213457</span>
                <span>Sun 30 Jul 2021, 12:38 pm</span>
              </div>
            </div>
            <br>

            <!-- Single Order Status-->
            <div class="single-order-status active">
            <div class="order-status"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
            <circle cx="8" cy="8" r="8"/></svg>
              </div>
              <div class="order-text">
                <h6>Undelivered</h6>
                <span>Sat, 1 Aug 21</span>
                <span>Customer not available/Door closed</span>
              </div>
            </div>


            </div>
          </div>
        </div>
      </div>

        </div> 
      </div>
    </div>

@stop