<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;
use Carbon\Carbon;
use App\Models\EndUser;
use App\Models\add_cart;
use App\Models\WishList;

use DB;
use Session;
use Redirect;
use View;
use compact;

class WishlistController extends Controller
{
    //
    ////////////////////////////////////////////wishlist///////////////////////////////////////////////////////
    public function wish()
    {
        if(session()->has('uid'))
        {
            $cid = Session::get('uid');
            $id = $_POST['td'];

            $product = product::find($id);
            $aid = $product->aid;

            $findprod = WishList::where('cid','=',$cid)->where('pid','=',$id)->count();

            if($findprod>0){

                return "exist";
            }
            else{
                $wish = new WishList;

                $wish->aid = $aid;
                $wish->cid = $cid;
                $wish->pid = $id;

                $wish->save();

                return "success";
            }
        }
        else{
            return "login";
        }
    }

/////////////////////////////////////////////////////wishlist list view////////////////////////////////////////////////
    public function wishlistlist()
    {
        if(session()->has('uid'))
        {
            $cid = Session::get('uid');

            $getaddwish = WishList::where('wishlist.cid',$cid)
                        ->select('product.id','product.item_name','prod_img.img_url','product.sale_price','product.mrp','product.discount','product.tax')->groupBy('wishlist.id')
                        ->leftJoin('product', function($join) {
                          $join->on('wishlist.pid', '=', 'product.id');
                        })
                        ->leftJoin('prod_img', function($join) {
                          $join->on('product.img', '=', 'prod_img.img_id');
                        })
                        ->orderBy('wishlist.id', 'DESC')
                        ->get();

            $total = WishList::where('cid',$cid)->count();  

        return View::make('wishlist-list',compact('getaddwish','total'));
            
        }
        else{
             $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
            $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            Session::put('urlval',$url);
            
            return View::make('login');
        }
        // return view('wishlist-grid');
    }

/////////////////////////////////////////////////////wishlist grid view////////////////////////////////////////////////
    public function wishgrid()
    {
        if(session()->has('uid'))
        {
            $cid = Session::get('uid');

            $getaddwish = WishList::where('wishlist.cid',$cid)
                        ->select('product.id','product.item_name','prod_img.img_url','product.sale_price','product.mrp','product.discount','product.tax')->groupBy('wishlist.id')
                        ->leftJoin('product', function($join) {
                          $join->on('wishlist.pid', '=', 'product.id');
                        })
                        ->leftJoin('prod_img', function($join) {
                          $join->on('product.img', '=', 'prod_img.img_id');
                        })
                        ->orderBy('wishlist.id', 'DESC')
                        ->get();

            $total = WishList::where('cid',$cid)->count(); 

            $color = DB::table('wishlist')->where('wishlist.aid','=','2')->where('wishlist.cid','=',$cid)
                // ->where('set_details_whole.qty','!=',0)
                ->select('color','size','qty')->groupBy('color')
                        ->leftJoin('set_details_whole', function($join) {
                          $join->on('set_details_whole.pid', '=', 'wishlist.pid');
                        })->get();

            $size = DB::table('wishlist')->where('wishlist.aid','=','2')->where('wishlist.pid','=',4)
                // ->where('set_details_whole.qty','!=',0)
                ->select('color','size','qty')->groupBy('size')
                        ->leftJoin('set_details_whole', function($join) {
                          $join->on('set_details_whole.pid', '=', 'wishlist.pid');
                        })->get();  

        return View::make('wishlist-grid',compact('getaddwish','total','color','size'));
            
        }
        else{
            $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
            $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            Session::put('urlval',$url);

            return View::make('login');
        }
        // return view('wishlist-grid');
    }

////////////////////////////////////////////////////wishlist size color ajax/////////////////////////////////////////////
    public function wishlistAjax()
    {
        $aid = '2';
        $pid = $_POST['td'];
        $html='';
        $html2='';

        $color = DB::table('product')->where('product.aid','=',$aid)->where('product.id','=',$pid)
                // ->where('set_details_whole.qty','!=',0)
                ->select('color','qty')->groupBy('color')
                        ->leftJoin('set_details_whole', function($join) {
                          $join->on('set_details_whole.pid', '=', 'product.id');
                        })->get(); 

        $size = DB::table('product')->where('product.aid','=',$aid)->where('product.id','=',$pid)
                // ->where('set_details_whole.qty','!=',0)
                ->select('size','qty')->groupBy('size')
                        ->leftJoin('set_details_whole', function($join) {
                          $join->on('set_details_whole.pid', '=', 'product.id');
                        })->get(); 

        $html .= '<div class="choose-color-wrapper">
                <input type="text" value="'.$pid.'" id="product-id" hidden>
              <p class="mb-1 font-weight-bold">Color</p>
              <div class="choose-color-radio d-flex align-items-center">';

        foreach ($color as $key => $val) {
         
        $html .= '<div class="form-check mb-0">
                  <input class="form-check-input" onclick="findSize(this.value)" style="background-color: '.$val->color.'" value="'.$val->color.'" id="color" type="radio" name="colorRadio" >

                  <label class="form-check-label" for="colorRadio1"></label>
                </div>';
            }  
        $html .= '</div></div>';
        $html2 .= '
            <br>
            <div class="choose-size-wrapper text-end">
              <p class="mb-1 font-weight-bold" style="text-align: left;">Size</p>
              <div class="choose-size-radio d-flex align-items-center">
              <p>To choose size first select COLOR</p>';

        foreach ($size as $key => $value) {
             
        // $html .= '<div class="form-check mb-0 me-2">
        //           <input class="form-check-input" id="size" value="'.$value->size.'" type="radio" name="sizeRadio">
        //           <label class="form-check-label" for="sizeRadio1">'.$value->size.'</label>
        //         </div>';
        }

        $html2 .='</div>
            </div>';

        $response = [
            'color' => $html,
            'size'  => $html2
        ];
        return response()->json($response);
        // return $html;
    }
/////////////////////////////////////////////////////show Size//////////////////////////////////////////////////////
    public function showsize(Request $req)
    {
        $id = $_POST['id'];
        $color = $_POST['dt'];
        $html = '';

        $checkColor = DB::select(DB::raw("SELECT id,pid,color,size,qty, IF(color = '$color', 'true', 'false')  as status FROM `set_details_whole` WHERE pid = '$id' AND color = '$color' UNION SELECT id,pid,color,size,qty, IF(color = '$color', 'true', 'false')  as status FROM `set_details_whole` WHERE pid = '$id' AND color != '$color' and size NOT IN (SELECT size FROM set_details_whole WHERE color = '$color' and pid = '$id') GROUP BY size order by size desc "));

        $html .= '
            <br>
            <div class="choose-size-wrapper text-end">
              <p class="mb-1 font-weight-bold" style="text-align: left;">Size</p>
              <div class="choose-size-radio d-flex align-items-center">';

        foreach ($checkColor as $key => $value) {

        if($value->status=="true"){
             
            $html .= '<div class="form-check mb-0 me-2">
                      <input class="form-check-input" id="size" value="'.$value->size.'" type="radio" name="sizeRadio">
                      <label class="form-check-label" for="sizeRadio1">'.$value->size.'</label>
                    </div>';

        }else{

            $html .= '<div class="form-check mb-0 me-2">
                  <input class="form-check-input" id="size" value="'.$value->size.'" type="radio" name="sizeRadio" disabled>
                  <label class="form-check-label" for="sizeRadio1">'.$value->size.'</label>
                </div>';
        }
        }

        $html .='</div>
            </div>';

        return $html;
    }
/////////////////////////////////////////////////////wishlist remove////////////////////////////////////////////////
    public function removeWishlist()
    {
        $id = $_POST['ht'];
        $cid = Session::get('uid');
		// $id = $req->cart_id;
		$delete=WishList::where('cid',$cid)->where('pid',$id);
        $delete->delete();

        $msg = "Successfully Removed from wishlist";

        return $msg;
    }

//////////////////////////////////////////////////////wishlist removehome///////////////////////////////////////////////
    public function removeWishlisthome()
    {
        $id = $_POST['ht'];
        $typ = $_POST['typ'];
        $cid = Session::get('uid');
        $aid = 2;
        $html = '';
        $html2 = '';
        $html3 = '';
        $top1 = '';
        // $id = $req->cart_id;
        $delete=WishList::where('cid',$cid)->where('pid',$id);
        $delete->delete();

        if(session()->has('uid'))
        {
            $cid = Session::get('uid');
        
            // echo $feature;
        // if($typ=="top"){
            $top1=DB::table('product_order')
                ->leftjoin('product','product_order.pid','product.id')
                ->select('product.*',DB::raw("(SELECT prod_img.img_url FROM prod_img WHERE prod_img.img_id=product.img ORDER BY prod_img.id ASC LIMIT 1) as img_url"),DB::raw("(SELECT IF(COUNT(*)>0,'true','false') FROM `wishlist` WHERE product.id=wishlist.pid AND wishlist.aid='".$aid."' AND wishlist.cid='".$cid."') AS wishlist"))
                ->where([['product.aid','=',$aid],['product_order.status','=','A'],['product_order.top','!=','0'],['product.top','=','Y']])
                ->orderBy('product_order.top','ASC')->take(4)
                ->get();    

        foreach ($top1 as $key => $top) {
                    # code...
            $html .= '<div class="col-6 col-md-4 col-lg-3">
              <div class="card top-product-card">
                <div class="card-body"><span class="badge badge-yellow">Hot</span>';
                    if(session()->has('uid')){
                    
                      if($top->wishlist=="false"){
            $html .= '
                        <a class="wishlist-btn" onclick="addtowish1('.$top->id.')"><i class="lni lni-heart"></i></a>';
                      }else{
            $html .= '<a class="wishlist-btn" onclick="removetowish('.$top->id.',\'top\')"><i class="lni lni-heart-filled"></i></a>';
                        }
                    }else{
            $html .= '<a class="wishlist-btn" onclick="addtowish1('.$top->id.')"><i class="lni lni-heart"></i></a>';
                    }
            $html .= '<a class="product-thumbnail d-block" href="category/shop-product/single-product/'.$top->id.'"><img src="http://34.72.9.224/quickWebsite/b2c_admin/'.$top->img_url.'" alt=""></a>
                 
                  <div class="product-description">
                    <a class="product-title d-block" href="category/shop-product/single-product/'.$top->id.'">'.$top->item_name.'</a>
                    <p class="sale-price">₹'.$top->sale_price.'<span>₹'.$top->mrp.'</span></p>
                  </div>
                </div>
              </div>
            </div>';
        }
            // }
        // elseif($typ=="feature"){
            $top2=DB::table('product_order')
                ->leftjoin('product','product_order.pid','product.id')
                ->select('product.*',DB::raw("(SELECT prod_img.img_url FROM prod_img WHERE prod_img.img_id=product.img ORDER BY prod_img.id ASC LIMIT 1) as img_url"),DB::raw("(SELECT IF(COUNT(*)>0,'true','false') FROM `wishlist` WHERE product.id=wishlist.pid AND wishlist.aid='".$aid."' AND wishlist.cid='".$cid."') AS wishlist"))
                ->where([['product.aid','=',$aid],['product_order.status','=','A'],['product_order.feature','!=','0'],['product.feature','=','Y']])
                ->orderBy('product_order.feature','ASC')->take(4)
                ->get();

        foreach ($top2 as $key => $feature) {
                    # code...
            $html2 .= '<div class="col-6 col-md-4 col-lg-3">
                      <div class="card featured-product-card">
                        <div class="card-body"><span class="badge badge-warning custom-badge"><i class="lni lni-star"></i></span><div class="product-thumbnail-side">';
                    if(session()->has('uid')){
                    
                      if($feature->wishlist=="false"){
            $html2 .= '
                        <a class="wishlist-btn" onclick="addtowish1('.$feature->id.')"><i class="lni lni-heart"></i></a>';
                      }else{
    
            $html2 .= '<a class="wishlist-btn" onclick="removetowish('.$feature->id.',\'feature\')"><i class="lni lni-heart-filled"></i></a>';
                      }
                    }else{
            $html2 .= '<a class="wishlist-btn" onclick="addtowish1('.$feature->id.')"><i class="lni lni-heart"></i></a>';
                    }
            $html2 .= '<a class="product-thumbnail d-block" href="category/shop-product/single-product/'.$feature->id.'"><img src="http://34.72.9.224/quickWebsite/b2c_admin/'.$feature->img_url.'" alt=""></a>
                  </div>
                  <div class="product-description">
                    <a class="product-title d-block" href="category/shop-product/single-product/'.$feature->id.'">'.$feature->item_name.'</a>
                    <p class="sale-price">₹'.$feature->sale_price.'<span>₹'.$feature->mrp.'</span></p>
                  </div>
                </div>
              </div>
            </div>';
        }
        $top3=DB::table('product_order')
                ->leftjoin('product','product_order.pid','product.id')
                ->select('product.*',DB::raw("(SELECT prod_img.img_url FROM prod_img WHERE prod_img.img_id=product.img ORDER BY prod_img.id ASC LIMIT 1) as img_url"),DB::raw("(SELECT IF(COUNT(*)>0,'true','false') FROM `wishlist` WHERE product.id=wishlist.pid AND wishlist.aid='".$aid."' AND wishlist.cid='".$cid."') AS wishlist"))
                ->where([['product.aid','=',$aid],['product_order.status','=','A'],['product_order.new','!=','0'],['product.new','=','Y']])
                ->orderBy('product_order.new','ASC')->take(4)
                ->get();

        $cot = count($top3);
        $actualcount = 4-$cot;

        $selectnew = DB::table('product')
                    ->select('product.*',DB::raw("(SELECT prod_img.img_url FROM prod_img WHERE prod_img.img_id=product.img ORDER BY prod_img.id ASC LIMIT 1) as img_url"),DB::raw("(SELECT IF(COUNT(*)>0,'true','false') FROM `wishlist` WHERE product.id=wishlist.pid AND wishlist.aid='".$aid."' AND wishlist.cid='".$cid."') AS wishlist"))
                    ->where('aid',$aid)->where('new','!=','Y')->orderBy('product.created_at','DESC')->take($actualcount)->get();
        $countnew = count($selectnew);

        foreach ($selectnew as $key => $new1) {
                    # code...
            $html3 .= '<div class="col-6 col-md-4 col-lg-3">
              <div class="card top-product-card">
                <div class="card-body">
                  <span class="badge badge-blue">New</span>';
                    if(session()->has('uid')){
                    
                      if($new1->wishlist=="false"){
            $html3 .= '
                        <a class="wishlist-btn" onclick="addtowish1('.$new1->id.')"><i class="lni lni-heart"></i></a>';
                      }else{
    
            $html3 .= '<a class="wishlist-btn" onclick="removetowish('.$new1->id.',\'new\')"><i class="lni lni-heart-filled"></i></a>';
                      }
                    }else{
            $html3 .= '<a class="wishlist-btn" onclick="addtowish1('.$new1->id.')"><i class="lni lni-heart"></i></a>';
                    }
            $html3 .= '<a class="product-thumbnail d-block" href="category/shop-product/single-product/'.$new1->id.'"><img src="http://34.72.9.224/quickWebsite/b2c_admin/'.$new1->img_url.'" alt=""></a>
                  
                  <div class="product-description">
                    <a class="product-title d-block" href="category/shop-product/single-product/'.$new1->id.'">'.$new1->item_name.'</a>
                    <p class="sale-price">₹'.$new1->sale_price.'<span>₹'.$new1->mrp.'</span></p>
                  </div>
                </div>
              </div>
            </div>';
        }

        foreach ($top3 as $key => $new) {
                    # code...
            $html3 .= '<div class="col-6 col-md-4 col-lg-3">
              <div class="card top-product-card">
                <div class="card-body">
                  <span class="badge badge-blue">New</span>';
                    if(session()->has('uid')){
                    
                      if($new->wishlist=="false"){
            $html3 .= '
                        <a class="wishlist-btn" onclick="addtowish1('.$new->id.')"><i class="lni lni-heart"></i></a>';
                      }else{
    
            $html3 .= '<a class="wishlist-btn" onclick="removetowish('.$new->id.',\'new\')"><i class="lni lni-heart-filled"></i></a>';
                      }
                    }else{
            $html3 .= '<a class="wishlist-btn" onclick="addtowish1('.$new->id.')"><i class="lni lni-heart"></i></a>';
                    }
            $html3 .= '<a class="product-thumbnail d-block" href="category/shop-product/single-product/'.$new->id.'"><img src="http://34.72.9.224/quickWebsite/b2c_admin/'.$new->img_url.'" alt=""></a>
                  
                  <div class="product-description">
                    <a class="product-title d-block" href="category/shop-product/single-product/'.$new->id.'">'.$new->item_name.'</a>
                    <p class="sale-price">₹'.$new->sale_price.'<span>₹'.$new->mrp.'</span></p>
                  </div>
                </div>
              </div>
            </div>';
        }
            // }
        }
        
        $response = [
            'top' => $html,
            'feature' => $html2,
            'new' =>$html3
        ];
        // $msg = "Successfully Removed from wishlist";
        return response()->json($response);
        // return $html;
    }
//////////////////////////////////////////////wishlistremove viewall///////////////////////////////////////////////////////
    public function removeWishlistview()
    {
        $id = $_POST['ht'];
        $typ = $_POST['typ'];
        $cid = Session::get('uid');
        $aid = 2;
        $html2 = '';
        $top1 = '';
        // $id = $req->cart_id;
        $delete=WishList::where('cid',$cid)->where('pid',$id);
        $delete->delete();

        if(session()->has('uid'))
        {
            $cid = Session::get('uid');
        
            // echo $feature;
        if($typ=="top"){
            $top1=DB::table('product_order')
                ->leftjoin('product','product_order.pid','product.id')
                ->select('product.*',DB::raw("(SELECT prod_img.img_url FROM prod_img WHERE prod_img.img_id=product.img ORDER BY prod_img.id ASC LIMIT 1) as img_url"),DB::raw("(SELECT IF(COUNT(*)>0,'true','false') FROM `wishlist` WHERE product.id=wishlist.pid AND wishlist.aid='".$aid."' AND wishlist.cid='".$cid."') AS wishlist"))
                ->where([['product.aid','=',$aid],['product_order.status','=','A'],['product_order.top','!=','0'],['product.top','=','Y']])
                ->orderBy('product_order.top','ASC')
                ->get();    

        }
        elseif($typ=="feature"){
            $top1=DB::table('product_order')
                ->leftjoin('product','product_order.pid','product.id')
                ->select('product.*',DB::raw("(SELECT prod_img.img_url FROM prod_img WHERE prod_img.img_id=product.img ORDER BY prod_img.id ASC LIMIT 1) as img_url"),DB::raw("(SELECT IF(COUNT(*)>0,'true','false') FROM `wishlist` WHERE product.id=wishlist.pid AND wishlist.aid='".$aid."' AND wishlist.cid='".$cid."') AS wishlist"))
                ->where([['product.aid','=',$aid],['product_order.status','=','A'],['product_order.feature','!=','0'],['product.feature','=','Y']])
                ->orderBy('product_order.feature','ASC')
                ->get();

            }
        }

        foreach ($top1 as $key => $feature) {
                    # code...
            $html2 .= '<div class="col-6 col-md-4 col-lg-3">
                      <div class="card featured-product-card">
                        <div class="card-body"><span class="badge badge-warning custom-badge"><i class="lni lni-star"></i></span><div class="product-thumbnail-side">';
                    if(session()->has('uid')){
                    
                      if($feature->wishlist=="false"){
            $html2 .= '
                        <a class="wishlist-btn" onclick="addtowish('.$feature->id.')"><i class="lni lni-heart"></i></a>';
                      }else{
                            if($typ=="feature"){
            $html2 .= '<a class="wishlist-btn" onclick="removetowish('.$feature->id.',\'feature\')"><i class="lni lni-heart-filled"></i></a>';
                      }
                      else if($typ=="top"){
            $html2 .= '<a class="wishlist-btn" onclick="removetowish('.$feature->id.',\'top\')"><i class="lni lni-heart-filled"></i></a>';            
                      }
                  }
                    }else{
            $html2 .= '<a class="wishlist-btn" onclick="addtowish('.$feature->id.')"><i class="lni lni-heart"></i></a>';
                    }
            $html2 .= '<a class="product-thumbnail d-block" href="category/shop-product/single-product/'.$feature->id.'"><img src="http://34.72.9.224/quickWebsite/b2c_admin/'.$feature->img_url.'" alt=""></a>
                  </div>
                  <div class="product-description">
                    <a class="product-title d-block" href="category/shop-product/single-product/'.$feature->id.'">'.$feature->item_name.'</a>
                    <p class="sale-price">₹'.$feature->sale_price.'<span>₹'.$feature->mrp.'</span></p>
                  </div>
                </div>
              </div>
            </div>';
        }
        // $msg = "Successfully Removed from wishlist";
        return $html2;
    }
}
