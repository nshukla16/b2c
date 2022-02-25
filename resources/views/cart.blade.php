@extends('layouts.cartLayout')
@section('content')
<style type="text/css">
  .alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #04AA6D;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style> 
   <div class="page-content-wrapper">
    @if($countcart>0)
 
      <div class="container">

        <div  id="error" class="alert" style="display: none;">Already exist in wishlist</div>
        <div id="insert" class="alert success" style="display: none;">Added in wishlist</div>

        @foreach($getaddcart as $key=>$value)
    <div class="weekly-best-seller-area pt-3">
        
        <div class="row g-3">
            <div class="col-12 col-md-12">
             
              <div class="card weekly-product-card" id="cart-card">
                 
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side" id="image-side">
                    <a class="remove-product" href="removeCart/{{$value->cart_id}}"><i class="fa fa-times-circle"></i></a>
                    <a class="product-thumbnail d-block" href="category/shop-product/single-product/{{$value->id}}" id="cart-img">
                      <img src="http://34.72.9.224/quickWebsite/b2c_admin/{{$value->img_url}}" alt=""></a>
                      @if($value->sqty<2)
                      <h5 id="cart-h5">Unavailable</h5>
                      @else
                      <h5 id="cart-h5">Available</h5>
                      @endif
                      <!-- if product is out of stock-->
                      <!-- <h5 id="stockOut-h5">OUT OF STOCK</h5> -->
                  </div>
                  <div class="product-description" id="cartDescription">
                    <a class="product-title d-block" href="category/shop-product/single-product/{{$value->id}}">{{$value->item_name}}</a>
                    <p class="sale-price" id="{{ $value->sale_price.'_data'.$value->cart_id }}" data-price="{{$value->sale_price}}">₹{{$value->sale_price * $value->qty}}<span style="color: #777474;" data-price="{{$value->mrp}}">₹{{$value->mrp * $value->qty}}</span></p>
                    <div class="container d-flex align-items-center justify-content" id="cart-container">
                      <!-- Choose Color-->
                      <div class="choose-color-wrapper">
                       <!--  <p class="mb-1 font-weight-bold">Color</p> -->
                        <div class="choose-color-radio d-flex align-items-center" id="cart-color">
                          <!-- Single Radio Input-->
                          <div class="mb-0">
                            <span id="colorLabel">Color: </span>
                            <input class="form-check-input" style="margin-right: 3px; background-color: {{$value->color}}" value="{{$value->color}}" id="color" type="radio" name="colorRadio" disabled="disabled">
                            <!-- <input class="btn btn-sm" style="background-color: {{$value->color}}"  id="color" type="button" name="colorRadio"> -->
                          </div>              
                        </div>
                      </div>
                  <!-- Choose Size-->
                  <div class="choose-size-wrapper" id="sizeWrapper">
                    <!-- <p class="mb-1 font-weight-bold">Size</p> -->
                    <div class="choose-size-radio d-flex align-items-center" style="text-align: center;">
                      <div class="mb-0">
                       <span id="colorLabel">Size:</span>
                        <label class="form-check-label" for="sizeRadio3" id="cartSize">{{$value->size}}</label>
                      </div>
                    </div>
                  </div>
                </div>
                <input type="text" name="product_id" value="{{$value->cart_id}}" hidden="">
             <div class="container">
            <form class="cart-form" action="#" method="" id="myform">
              <div class="order-plus-minus d-flex align-items-center" id="quantity">
                <span id="qtyLabel" style="padding-right: 10%;">Qty</span>
                <div class="quantity-button-handler qtyminus" id="qtybtn" onclick="decrementValue('{{$value->sale_price}}','{{$value->cart_id}}')">-</div>
                <input class="form-control cart-quantity-input number" id="{{$value->sale_price.$value->cart_id}}" type="text" step="1" name="quantity" value="{{$value->qty}}">
                <div class="quantity-button-handler qtyplus" onclick="incrementValue('{{$value->sale_price}}','{{$value->cart_id}}')">+</div>
              </div>
                            
            </form>
          </div>
          <br>
          @if($value->sqty<2)
          <p id="cart-p">Undeliverable</p>
          @else
          <p id="cart-p">Expected Delivery – In 7 Days</p>
          @endif
          <!-- if out of stock-->
            <!-- <p id="stockOut-p">Cannot Be Delivered</p> -->
          <a href="" id="cart-btn" onclick="addtowish('{{$value->id}}')">MOVE TO WISHLIST</a>
          </div>
        </div>         
      </div>   
    </div>
  </div>
  <!-- row end-->

</div>
 @endforeach
</div>
    
@else
      <!-- if cart is empty -->
<div class="container-fluid pt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="cart-wrapper-area py-3">
                
                <div class="card-body cart">
                    <div class="col-sm-12 empty-cart-cls text-center"> <img src="https://i.imgur.com/dCdflKN.png" width="130" height="130" class="img-fluid mb-4 mr-3">
                        <h3><strong>Your Cart is Empty</strong></h3>
                        <h4>Add something to make me happy :)</h4> <a href="home" class="btn btn-primary cart-btn-transform m-3" data-abc="true">continue shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end-->
@endif

</div>
<script>
  function addtowish(td){
    // alert(td);
      $.ajax({
            type:'POST',
            url:'{{url("/wishlist")}}',
            data: {'td':td},
              //  beforeSend: function (request) {
              //     return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
              // },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){
              // alert(data);
              if(data=="login"){
                window.location.href = "{{url('/login')}}"; 
                // window.location.href = "http://34.72.9.224/quickWebsite/b2c/public/login"; 

             }
             else if(data=="success"){
              console.log(data);
              $("#insert").show();
              location.reload();
              // document.getElementById("success").innerHTML = data;

              setTimeout(function(){
                $("#insert").hide();
                  // document.getElementById("success").innerHTML = '';
              }, 1500);
            }
            else if(data=="exist"){
              console.log(data);
              $("#error").show();

              setTimeout(function(){
                $("#error").hide();
              }, 1500);
            }
          }
      });
    }

  function cartdata(){
    var color = document.getElementById("color").value;
    alert(color);
  }

  function checkout(){
    var totqty = [];
    var totpro = [];
    var totalpro = document.getElementsByName("product_id");
    var totalqty = document.getElementsByName("quantity");
    for(var i=0; i<totalpro.length; i++){
      totqty.push(totalqty[i].value);
      totpro.push(totalpro[i].value);
    }
    // alert(totpro);
    // die();
    // var token = '{{csrf_token()}}';
    $.ajax({
      type: 'POST',
      // url: '/quickWebsite/b2c/public/updateCheck',
      url: "{{url('/updateCheck')}}",
      data:{'totqty':totqty,'totpro':totpro},
      headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){
              if(data=='Success'){
                // alert(data);
                window.location.href = "{{url('/cartWithAddress')}}";
                // window.location.href = "http://34.72.9.224/quickWebsite/b2c/public/checkout";
              }
      }
    });
  }
  /* Assign actions */
$('.quantity-button-handler input').change( function() {
  updateQuantity(this);
});

$('.card-link-secondary button').click( function() {
  removeItem(this);
});

function incrementValue(ht,pid)
{
    var value = document.getElementById(ht+pid).value;
    value = isNaN(value) ? 0 : value;
    value++;
    if(value<1){
      value = 1;
    }
    // document.getElementById('number').value = value;
    productpagetotal(ht,value,pid);
    console.log(ht);
}
function decrementValue(ht,pid)
{
    var value = document.getElementById(ht+pid).value;
    value = isNaN(value) ? 0 : value;
    value--;
    if(value<1){
      value = 1;
    }
    // document.getElementById('number').value = value;
    productpagetotal(ht,value,pid);
    console.log(ht);

}
var totalPrice=0;
function productpagetotal(th,val,did) {
  var tot=0;
  var sum = th * val;
  // sum = Math.round(sum * 100) / 100;
  document.getElementById(th+"_data"+did).innerHTML = "₹"+sum;
  document.getElementById(th+"_input").value=sum; 
  // }
  var totalPrice = document.getElementsByName("prototal");
  // var totalPrice = document.getElementsByName("prototal")[0].value;
  for(var i=0; i<totalPrice.length; i++){
    // totalPrice = totalPrice.length;
    tot += parseInt(totalPrice[i].value);
    // totalPrice = document.getElementsByName("prototal")[1];
  }
  document.getElementById("gtotal").innerHTML=tot;
  console.log(tot);
  console.log(sum);
}
</script>
@stop