<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
use App\models\Cart;
use App\models\Order;
use Illuminate\Support\Facades\DB;

class productcontroller extends Controller
{
    //
    public function index()

    {
    	# code...
    	$data=Product::all();
    	return view('product',['products'=>$data]);
    }
     public function detail($id)

    {
    	# code...
       $data=Product::find($id); 
       	return view('details',['product'=>$data]);
    }
      public function search(Request $req)
    {
    	# code...
        $data=Product::where('name','like','%'.$req->input('query').'%')->get();
       	return	view('search',['products'=>$data]);
    }

      public function addtocart(Request $req)
    {
    	# code...
        if($req->session()->has('user'))
        {
          $cart=new Cart;
          $cart->user_id=$req->session()->get('user')['id'];
          $cart->product_id=$req->product_id;
          $cart->save();
          return redirect('/');


       	   
        }
        else
        {
          return redirect('/login');
        }
        
    }
   static function cartitem()
   {
     # code...
     $userid = session()->get('user')['id'];
     return Cart ::where('user_id',$userid)->count();
   }
   public function cartlist()
   {
     # code...
     $userid = session()->get('user')['id'];
     $products=DB::table('cart')
     ->join('products','cart.product_id','=','products.id')
     ->where('cart.user_id',$userid)
     ->select('products.*','cart.id as cart_id')
     ->get();

     return view('cartlist',['products'=>$products]);
   }
   public function cartremove($id)
  
   {
     # code...
     Cart::destroy($id);
     return redirect('cartlist');
   }
   public function ordernow()
   {
     # code...
     $userid = session()->get('user')['id'];
     $total=DB::table('cart')
     ->join('products','cart.product_id','=','products.id')
     ->where('cart.user_id',$userid)
     ->sum('products.price');
     return view('ordernow',['totalorder'=>$total]);

   }
   public function orderplace(Request $req)
   {
     # code...
     $userid = session()->get('user')['id'];
     $allcart=Cart::where('user_id',$userid)->get();
     foreach($allcart as $cart)
     {
     $order= new Order;
     $order->product_id=$cart['product_id'];
     $order->user_id=$cart['user_id'];
     $order->status="pending";
     $order->payment_method=$req->payment;
     $order->payment_status="pending";
     $order->address=$req->address;
     $order->save();
     Cart::where('user_id',$userid)->delete();
     }

     return redirect('/');
   }
   public function myorders()
   {
     # code...
     $userid = session()->get('user')['id'];
     $total=DB::table('orders')
     ->join('products','orders.product_id','=','products.id')
     ->where('orders.user_id',$userid)
     ->get();
     return view('myorders',['orders'=>$total]);

   }
    
  
    
}
