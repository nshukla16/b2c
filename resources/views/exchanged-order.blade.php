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
              <h6>Exchanged</h6><span>on 20 Jul 2021</span>    
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
              <div class="ratings-submit-form bg-white pt-2 pb-3 px-3">
        <div class="container" style="display:inline-flex;">
          <p id="rateP">Rate Product</p>
          <form action="#" method="">
            <div class="stars">
              <input class="star-1" type="radio" name="star" id="star1">
              <label class="star-1" for="star1"></label>
              <input class="star-2" type="radio" name="star" id="star2">
              <label class="star-2" for="star2"></label>
              <input class="star-3" type="radio" name="star" id="star3">
              <label class="star-3" for="star3"></label>
              <input class="star-4" type="radio" name="star" id="star4">
              <label class="star-4" for="star4"></label>
              <input class="star-5" type="radio" name="star" id="star5">
              <label class="star-5" for="star5"></label><span></span>
            </div>     
            </form>
          </div>
        </div>
            </div>
          </div>
          </div>
           <!-- card ends-->
          <div class="my-order-wrapper pt-3">
        <div class="card w-100">
          <div class="card-body p-4">
            <!-- Single Order Status-->
            <div class="single-order-status active">
            <div class="order-status"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
            <circle cx="8" cy="8" r="8"></circle></svg>
              </div>
              <div class="order-text">
                <h6>Ordered<span>Sun, 27 Jul 2021</span></h6>
                <span>Your order has been placed</span>
                <span>Sun 30 Jul 2021, 12:38 pm</span>
              </div>
            </div>
            <br>
            <!-- Single Order Status-->
            <div class="single-order-status active">
            <div class="order-status"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
            <circle cx="8" cy="8" r="8"></circle></svg>
              </div>
              <div class="order-text">
                <h6>Packed<span>Wed, 30 Jul 2021</span></h6>
                <span>Seller has processed your order</span>
                <span>Your item has been picked up by courier partner.</span>
              </div>
            </div>
            <br>
            <!-- Single Order Status-->
            <div class="single-order-status active">
            <div class="order-status"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
            <circle cx="8" cy="8" r="8"></circle></svg>
              </div>
              <div class="order-text">
                <h6>Shipped<span>Thu, 31 Jul 2021</span></h6>
                <span>EKART Logistics- FMPP0213457</span>
                <span>Sun 30 Jul 2021, 12:38 pm</span>
              </div>
            </div>
            <br>

            <!-- Single Order Status-->
            <div class="single-order-status active">
            <div class="order-status"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
            <circle cx="8" cy="8" r="8"></circle></svg>
              </div>
              <div class="order-text">
                <h6>Delivered<span>Mon, 2 Aug 21</span></h6>
                <span>Your item has been delivered.</span>
                <span>Mon, 2 Aug 2021</span>
              </div>
            </div>
            <br>

             <!-- Single Order Status-->
            <div class="single-order-status active">
            <div class="order-status"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
            <circle cx="8" cy="8" r="8"></circle></svg>
              </div>
              <div class="order-text">
                <h6>Return<span>Tue, 3 Aug 21</span></h6>
                <span>You returned this order because the item was stained/torn.</span>
                <span>Tue, 3 Aug 2021</span>
              </div>
            </div>
            <br>

             <!-- Single Order Status-->
            <div class="single-order-status active">
            <div class="order-status"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
            <circle cx="8" cy="8" r="8"></circle></svg>
              </div>
              <div class="order-text">
                <h6>Pickup & Exchange<span>Tue, 3 Aug 21</span></h6>
                <span>Exchanged on 7 Aug 2021.</span>
              </div>
            </div>

            </div>
          </div>
        </div>
          <!-- card 2 ends-->
        
        </div>
        
      </div>
    </div>

@stop