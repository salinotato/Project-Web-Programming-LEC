<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public static function deleteCart($id){
        DB::table('carts')->where('CartID','=',$id)->delete();
    }
    
    public static function create()
    {
        $user = auth()->user();
        Cart::create([
            'UserID' => $user->id
        ]);
    }

    public function cart_page(){
        $title = 'Cart';

        $carts = DB::table('carts')
            ->select('*')
            ->join('items', 'items.CartID', '=', 'carts.CartID')
            ->join('products', 'products.ProductID', '=', 'items.ProductID')
            ->where('carts.UserID', '=', auth()->user()->id)
            ->where('products.isDelete', '=', 0)
            ->get();
        return view('pages.cart',compact('title','carts'));
    }
}
