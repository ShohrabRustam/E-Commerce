<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products_;
// use App\Models\User;
use App\Models\Cart;
use App\Models\Orders;
use Session;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index(){
        // return Products_::all();
        $productData= Products_::all();
        // return View('product')->with('productData',$productData);
        return View('product',['product' => $productData]);
    }

    public static function detail($id){
            $data =  Products_::find($id);
            return view('detail', ['product' => $data]);
    }

    function search(Request $req){
        $data = Products_::where('name', 'like', '%'.$req->input('query').'%')->get();
        return view('search',['product' =>$data]);
    }

    public function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart=new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');

        }
        else{
            return redirect('login');
        } 
    }
    
            public static function cartItem(){
                $userId= Session::get('user')['id'];
                return Cart::where('user_id',$userId)->count();
                
            }

            public function cartList(){
                // use
                // return "Hello";
                $userId=Session::get('user')['id'];
                $products = DB::table('cart')->join('products_' , 'cart.product_id' , '=' , 'products_.id')
                ->where('cart.user_id',$userId)
                ->select('products_.*','cart.id as cart_id')
                ->get();

                return view('cartList',['products'=>$products]);

            }
             
            public function removeItemCart($id){
                    Cart::destroy($id);
                    return redirect('cartList');
            }

            public function orderNow(){
                $userId=Session::get('user')['id'];
                $total= DB::table('cart')->join('products_' , 'cart.product_id' , '=' , 'products_.id')
                ->where('cart.user_id',$userId)
                ->select('products_.*','cart.id as cart_id')
                ->sum('products_.price');
                 
                return view('orderNow',['total'=> $total]);

            }

            public function orderPlace(Request $req){
                    // return $req->input();
                    $userId = Session::get('user')['id'];
                     $allCart=Cart::where('user_id',$userId)->get();
                     foreach($allCart as $cart){
                         $order= new Orders;
                         $order->product_id=$cart['product_id'];
                         $order->user_id=$cart['user_id'];
                         $order->status="pending";
                         $order->payment_method=$req->payment;
                         $order->address_1=$req->address_1;
                         $order->address_2=$req->address_2; 
                         $order->payment_status = "pending";
                         $order->save();
                         Cart::where('user_id',$userId)->delete();
                         ////////////////////////////////////
                         
                         
                        }
                        return redirect('/');

                    
            }

            public function myOrder(){
                // $userId = Session::get('user')['id'];
                // $allOrder=Orders::where('user_id',$userId)->get();
                // echo "<pre>";
                // print_r($allOrder);
                $userId=Session::get('user')['id'];
                $orders= DB::table('orders')
                ->join('products_' , 'orders.product_id' , '=' , 'products_.id')
                ->where('orders.user_id',$userId)
                // ->select('products_.*','orders.id as cart_id')
                ->get();
                //  echo "<pre>";
                // print_r ($orders);
                return view('myOrders',['orders'=>$orders]);

            }

           
}
