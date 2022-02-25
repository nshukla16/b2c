@extends('layouts.default')
@section('content')

<div class="page-content-wrapper">

  <div class="pb-3 pt-3">
    <div class="container">
       <div class="row g-3">
           
            <div class="col-12 col-md-12">
              <div class="card weekly-product-card" style="background-color: #d0d0d040;">
                <div class="card-body d-flex align-items-center">
                  
                  <div class="col-md-3">
                    <a class="product-thumbnail d-block" href=""><img src="img/product/11.png" alt="" style="width: 56%;"></a>
                  </div>
                  <div class="product-description">
                    <a class="product-title d-block">item name</a>
                    <br>
                    <span>description</span>
                    <br>
                   <span>Product color </span><input class="form-check-input" value="" id="color" type="radio" name="colRadio">
                   <br>
                   <span>Size:</span>
                   <br>                
                   <span>Qty:</span>
              </div>

                </div>
              </div>
             
              </div>
            
            </div>
        <br>
        <div class="card w-100">
  <div class="card-body p-4">
   <!-- Single Order Status-->
            <div class="single-order-status active">
              <div class="order-icon shadow-sm"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
<path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
<path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg>
              </div>
              <div class="order-text">
                <h6>Delivered</h6>
                <br>
                <p>on Sat, 20 May</p>
              </div>
   
            </div>
          </div>
        </div>
        <br>
            <div class="card w-100">
  <div class="card-body p-4">
   <!-- Single Order Status-->
            <div class="single-order-status active">
              <div class="order-text">
              <span>Exchange/Return window closed on 10 may</span>
              </div>
   
            </div>
          </div>
        </div>
        <br>
         <h6>Other Items in this order</h6>
          
   <div class="card w-100">
          <div class="row g-3">
           
            <div class="col-12 col-md-12">
              <div class="card weekly-product-card" style="background-color: #d0d0d040;">
                <div class="card-body d-flex align-items-center">
                  
                  <div class="col-md-3">
                    <a class="product-thumbnail d-block" href=""><img src="img/product/11.png" alt="" style="width: 56%;"></a>
                  </div>
                  <div class="product-description">
                    <a class="product-title d-block">item name</a>
                    <br>
                    <span>Description</span>
                    <br>
                   <span>Product color </span><input class="form-check-input" value="" id="color" type="radio" name="colRadio">
                   <br>
                   <span>Size:</span>
                   <br>                
                   <span>Qty:</span>
              </div>

                </div>
              </div>
             
              </div>
            
            </div>
         
          </div>
        <br>

      <div class="cart-table card mb-3">
      	<div class="row">
        <div class="col-lg-12">
           <div class="p-4">
            <strong class="text-muted">Delivery Address</strong>
                <p>Phone: 9999999999</p>
                <span class="text-muted">Full Address of the customer</span>
          
          </div>
      </div>
      <br>
   
      <div class="col-lg-6">
           <div class="p-4">
            <h5 class="font-weight-bold">Total Order Price</h5>
              
             <span class="text-muted">You saved <i class="lni lni-rupee"></i> 500.00 on this order.</span>
          
          </div>
      </div>
      <div class="col-lg-6">
           <div class="p-4">
            <h5 class="font-weight-bold"><i class="lni lni-rupee">450.00</i></h5>
            <span class="text-muted">View Breakup</span>
          
          </div>
      </div>
      <br>
    
      <div class="col-lg-12">
           <div class="p-4">
            <h5 class="font-weight-bold">Updates sent to</h5>
             <span class="text-muted"><i class="lni lni-phone"></i>9999999999</span>
             <br>
             <span class="text-muted"><i class="lni lni-mail"></i>xyz@abc.com</span>
             <br>
             <span class="text-muted">Order Id #123456798</span>
            
          </div>
      </div>
   <!--    <div class="col-lg-6">
          <div class="p-4">
            <strong class="text-muted">Shipped To</strong>
           
            <p>Full Address....</p>

          </div>
          
        </div> -->
      </div>
  </div>
   

    </div>
  </div>

</div>


@stop