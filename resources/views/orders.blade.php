@extends('layouts.orderLayout')
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
             
          <div class="section-heading d-flex align-items-center justify-content">
           <div class="card cart-amount-area" style="width:34%;">
            <div class="card-body d-flex align-items-center justify-content-center"> 
            <p id="order-sort">Showing: <strong>All Orders</strong></p>
             </div>
           </div>
             <div class="card cart-amount-area" style="width:35%;">
            <div class="card-body d-flex align-items-center justify-content-center">
              <p id="order-sort">Within:<strong>Last 6 Months</strong></p>
             </div>
           </div>

           <div class="card cart-amount-area" style="width:30%;" id="suhaNavbarToggler">
            <div class="card-body d-flex align-items-center justify-content-center" id="filter-order">
              <i class="fa fa-filter" id="sortIcons"></i>
            <p>Filter</p>
             </div>
           </div>
          </div>
          <!-- orders cards-->

            <div class="card w-100">
          <div class="card-body p-4">
            <div class="single-order-status active" id="order-head">
              <div class="order-text">    
              <h6>Order Placed</h6><span>Your order will be confirmed shortly.</span>       
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
              </div>
              </div>
              <div class="order-btn">
               <a class="btn w-100" href="#">Cancel</a>
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
              <h6>Order Accepted</h6><span>Arriving by 30 Jul 2021.</span>
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
              </div>
              </div>
              <div class="order-btn">
               <a class="btn w-100" href="#">Cancel</a>
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
              <h6>Delivered</h6><span>On 24 Jul 2021.</span>
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
              <div class="order-btn">
               <a class="btn w-100" href="#">Return</a>
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
              <h6>Delivered</h6><span>On 24 Jun 2021.</span>
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
              </div>
              </div>
              <ul>
                <li style="list-style: disc;">Exchange/Return window closed on 2 Jul</li>
              </ul>
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
         
        </div>
        <!-- card ends-->
         <div class="card w-100">
          <div class="card-body p-4">
            <div class="single-order-status active" id="order-head">
              <div class="order-text">
              <h6 id="cancelled">Cancelled</h6><span>On 10 May 2021 by You.</span>
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
              </div>
              </div>

              </div>
            </div>
          </div>
         
        </div>
 <!-- card ends-->
          <a href="order-returned">
          <div class="card w-100">
          <div class="card-body p-4">
            <div class="single-order-status active" id="order-head">
              <div class="order-text">
              <h6 id="cancelled">Returned</h6><span>On 10 Jul 2021 by You.</span>
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
              </div>
              </div>

              </div>
            </div>
          </div>
         
        </div>
        </a>
 <!-- card ends-->

          <div class="card w-100">
          <div class="card-body p-4">
            <div class="single-order-status active" id="order-head">
              <div class="order-text">
              <h6 id="cancelled">Cancelled</h6><span>On 8 May 2021.</span>
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
              <h6>Ready to ship</h6><span>Will be shipped by 30 Jul 2021.</span>
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
              </div>
              </div>
              <div class="order-btn">
               <a class="btn w-100" href="#">Cancel</a>
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
              <h6>Shipped</h6><span>On 31 Jul 2021 – Estd. Delivery 2 Aug 2021.</span>
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
              </div>
              </div>
              <div class="order-btn" style="display: flex;">
               <a class="btn w-50" href="track-order">Track</a>
               <a class="btn w-50" href="order-cancel">Cancel</a>
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
              <h6>Delivered</h6><span>On 21 Jul 2021</span>
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
              <div class="order-btn" style="display: flex;">
               <a class="btn w-50" href="order-returnD">Return</a>
               <a class="btn w-50" href="order-exchangeD">Exchange</a>
             </div>
              </div>
            </div>
          </div>   
        </div>
        <!-- card ends-->
        <a href="order-exchange">
          <div class="card w-100">
          <div class="card-body p-4">
            <div class="single-order-status active" id="order-head">
              <div class="order-text">
              <h6 id="exchange">Exchange Requested</h6><span>On 2 Aug 2021.</span>
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
              </div>
              </div>
              <div class="order-btn">
               <a class="btn w-100" href="cancel-exchange">Cancel</a>
             </div>
              </div>
            </div>
          </div>   
        </div>
      </a>
        <!-- card ends-->
        <a href="order-return">
        <div class="card w-100">
          <div class="card-body p-4">
            <div class="single-order-status active" id="order-head">
              <div class="order-text">
              <h6 id="exchange">Return Requested</h6><span>On 3 Aug 2021.</span>
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
              </div>
              </div>
              <div class="order-btn">
               <a class="btn w-100" href="#">Cancel</a>
             </div>
              </div>
            </div>
          </div>   
        </div>
        </a>
        <!-- card ends-->
        <a href="exchange-accepted">
          <div class="card w-100">
          <div class="card-body p-4">
            <div class="single-order-status active" id="order-head">
              <div class="order-text">
              <h6>Exchange Accepted</h6><span>On 2 Aug 2021.</span>
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
              </div>
              </div>
              <div class="order-btn">
               <a class="btn w-100" href="">Cancel</a>
             </div>
              </div>
            </div>
          </div>   
        </div>
      </a>
      <!--card end-->
        <a href="exchange-rejected">
          <div class="card w-100">
          <div class="card-body p-4">
            <div class="single-order-status active" id="order-head">
              <div class="order-text">
              <h6 id="cancelled">Exchange Rejected</h6><span>On 2 Aug 2021.</span>
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
              </div>
              </div>
              <div class="order-btn">
               <a class="btn w-100" href="cancel-exchange">Cancel</a>
             </div>
              </div>
            </div>
          </div>   
        </div>
      </a>
      <!--card end-->
        <a href="refund-rejected">
          <div class="card w-100">
          <div class="card-body p-4">
            <div class="single-order-status active" id="order-head">
              <div class="order-text">
              <h6 id="cancelled">Refund Rejected</h6><span>On 2 Aug 2021.</span>
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
              </div>
              </div>
              <div class="order-btn">
               <a class="btn w-100" href="cancel-exchange">Cancel</a>
             </div>
              </div>
            </div>
          </div>   
        </div>
      </a>
      <!--card end-->
      <a href="exchanged-order">
        <div class="card w-100">
          <div class="card-body p-4">
            <div class="single-order-status active" id="order-head">
              <div class="order-text">
              <h6>Exchanged</h6><span>On 24 Jul 2021.</span>
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
              </div>
              </div>
              <ul>
                <li>Exchange/Return window closed</li>
              </ul>
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
              <div class="order-btn">
               <a class="btn w-100" href="#">Return</a>
             </div>
              </div>
            </div>
          </div>   
        </div>
        </a>
        <!-- card ends-->
        <a href="undelivered-order">
          <div class="card w-100">
          <div class="card-body p-4">
            <div class="single-order-status active" id="order-head">
              <div class="order-text">
              <h6 id="cancelled">Undelivered</h6><span>On 10 May 2021 by You.</span>
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
              </div>
              </div>

              </div>
            </div>
          </div>
         
        </div>
        </a>
 <!-- card ends-->
         <a href="refund-completed">
          <div class="card w-100">
          <div class="card-body p-4">
            <div class="single-order-status active" id="order-head">
              <div class="order-text">
              <h6>Refund Completed</h6><span>On 10 Jul 2021</span>
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
              </div>
              </div>

              </div>
            </div>
          </div>
         
        </div>
        </a>
   <!-- card ends-->

         <a href="refund-accepted">
          <div class="card w-100">
          <div class="card-body p-4">
            <div class="single-order-status active" id="order-head">
              <div class="order-text">
              <h6>Refund Accepted</h6><span>On 10 Jul 2021</span>
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
              </div>
              </div>

              </div>
            </div>
          </div>
         
        </div>
        </a>
   <!-- card ends-->

       <a href="refund-initiated">
          <div class="card w-100">
          <div class="card-body p-4">
            <div class="single-order-status active" id="order-head">
              <div class="order-text">
              <h6>Refund Initiated</h6><span>On 10 Jul 2021</span>
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
              </div>
              </div>

              </div>
            </div>
          </div>
         
        </div>
        </a>
   <!-- card ends-->

          <a href="return-accepted">
          <div class="card w-100">
          <div class="card-body p-4">
            <div class="single-order-status active" id="order-head">
              <div class="order-text">
              <h6>Refund Accepted</h6><span>On 10 Jul 2021</span>
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
              </div>
              </div>

              </div>
            </div>
          </div>
         
        </div>
        </a>
   <!-- card ends-->
        </div>
        
      </div>
    </div>

@stop