@extends('layouts.default')
@section('content')

    <div class="page-content-wrapper">
      <!-- Top Products-->
      <div class="top-products-area py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            @if($total==1)
              <h6>Your Wishlist have {{$total}} item only</h6>
            @else
              <h6>Your Wishlist have {{$total}} items only</h6>
            @endif
            <!-- Layout Options-->
           <!--  <div class="layout-options"><a class="active" href="wishlist-grid"><i class="lni lni-grid-alt"></i></a><a href="wishlist-list"><i class="lni lni-radio-button"></i></a></div> -->
          </div>
          <div class="row g-3">
            <!-- Single Top Product Card-->
            @foreach($getaddwish as $key=>$value)
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card top-product-card">
                <div class="card-body">
                  <!-- badge class will change on the basis of best sellers /new arrivals-->
                  <!-- for best sellers badge-yellow(Hot).. for new arrivals badge-blue (New) -->
                  <span class="badge badge-yellow"> Hot<!-- -{{$value->discount}}% --></span>
                  <a class="wishlist-btn" onclick="removeWishlist('{{$value->id}}')"><i class="lni lni-heart-filled"></i></a>
                  <a class="product-thumbnail d-block" href="category/shop-product/single-product/{{$value->id}}">
                    <img class="mb-2" src="http://34.72.9.224/quickWebsite/b2c_admin/{{$value->img_url}}" alt=""></a>
                  <a class="product-title d-block" href="category/shop-product/single-product/{{$value->id}}">{{$value->item_name}}</a>

                  <p class="sale-price"><i class="lni lni-rupee"></i>{{$value->sale_price}} <span style="color: #777474;">₹180</span></p>
               <!--  <button class="btn btn-warning ms-3" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="showModal('{{$value->id}}')" name=""><i class="me-1 lni lni-cart"></i></button> -->
               <div class="weekly-product-card">
            <div class="product-description">
              <div class="product-rating">
            <i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled" id="emptyStar"></i><i class="lni lni-star-filled" id="emptyStar"></i>
          </div>
            </div>
             </div>
            <a class="btn btn-success" href="" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="showModal('{{$value->id}}')" name="">ADD TO BAG</a>
            <!-- if out of stock then out of stock button will be used-->
           <!--  <a class="btn btn-success oos" name="">Out Of Stock</a> -->

                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal">Select Attributes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="modal-body1"> </div>
        <div class="modal-body2" style="display: none;"> </div>
      
      </div>
      <div class="modal-footer">
       <form class="cart-form" action="#" method="">
              <div class="order-plus-minus d-flex align-items-center">
                <div class="quantity-button-handler">-</div>
                <input class="form-control cart-quantity-input" id="qty" type="text" step="1" name="quantity" value="1">
                <div class="quantity-button-handler">+</div>
              </div>
            </form>
      <button type="button" class="btn btn-primary" onclick="addCart()">Continue</button>
      </div>
    </div>
  </div>     
</div>
<script type="text/javascript">
function findSize(dt){
	var id = document.getElementById('product-id').value;
  // var size = document.getElementById('size').value;
	// alert(id);
  $.ajax({
            type:'POST',
            url:'{{url("/showSize")}}',
            // url:'/quickWebsite/b2c/public/showColor',
            data: {'dt':dt,'id':id},
              //  beforeSend: function (request) {
              //     return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
              // },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){
              $('.modal-body2').show();
              $('.modal-body2').html(data);
                //   $("#exampleModal").html(result);
              $('#exampleModal').modal('show');
              // console.log(data);
            }
        });
}


  function showModal(td) {
    // $('#exampleModal').modal('hide');
    // alert(td);
    $.ajax({
               type:'POST',
               url:'{{url("/wishlistAjax")}}',
               data: {'td':td},
              //  beforeSend: function (request) {
              //     return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
              // },
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
               success:function(result) {
                $('.modal-body2').show();
                $('.modal-body2').html(result.size);
                $('.modal-body1').html(result.color);
                //   $("#exampleModal").html(result);
                $('#exampleModal').modal('show');
                // $('#exampleModal').html(result).modal('show');
                  // console.log(val1);
                  // console.log(result.color);
               }
            });
}
$(document).ready(function() {
    $('input:radio[name=colorRadio]').change(function() {
    // $('.form-check-input').click(function(){
    var color = $('input[name="colorRadio"]:checked').val();
    // var id = document.getElementById('product-id').value;
    alert("id");
    console.log(color);
    // $.ajax({
    //         type:'POST',
    //         url:'/quickWebsite/b2c/public/showColor',
    //         data: {'size':size,'id':id},
    //           //  beforeSend: function (request) {
    //           //     return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
    //           // },
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         },
    //         success:function(data){
    //           $("#oldColor").hide();
    //           $("#newColor").show();
    //           $("#newColor").html(data);
    //           console.log(data);
    //         }
    //     });
        
    });
});
function addCart(){
    // alert('hello');
    var id = document.getElementById('product-id').value;
    var qty = document.getElementById('qty').value;
    // var color = document.getElementById('color').value;
    var color = $('input[name="colorRadio"]:checked').val();
    var size = $('input[name="sizeRadio"]:checked').val();
    // alert(color);
    // die();
    if($("input:radio[name='sizeRadio']").is(":checked")){
      // alert(size);
      $.ajax({
            type:'POST',
            url:'{{url("/addtoCart")}}',
            data: {'size':size,'id':id,'qty':qty,'color':color},
              //  beforeSend: function (request) {
              //     return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
              // },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){
              if(data=='Successfully Added in your bag'){
                alert(data);
                removeWishlist(id);
              }
              else{
                alert(data);
              }
            }
      });
    }else{
      alert("First select Size");

    }
  }
  function removeWishlist(ht){
    // alert(ht);
    $.ajax({
            type:'POST',
            url:'{{url("/removeWishlist")}}',
            data: {'ht':ht},
              //  beforeSend: function (request) {
              //     return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
              // },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){
              if(data=='Successfully Removed from wishlist'){
                // alert(data);
                // removeWishlist(id);
                // window.location.href = "http://34.72.9.224/quickWebsite/b2c/public/wishlist-grid"; 
                window.location.href = '{{url("/wishlist-grid")}}'; 
              }
              else{
                alert(data);
              }
            }
      });
  }
</script>
@stop