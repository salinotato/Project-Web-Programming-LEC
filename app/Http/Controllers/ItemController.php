<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CartController;

class ItemController extends Controller
{
    public function addItemToCart($id ,Request $request)
    {
        $validate = $request->validate([
            'Quantity' => 'required|integer|min:1'
        ]);
        if ($validate) {
            $checkUserCart = Cart::where('UserID', '=', auth()->user()->id)->first();
            if (is_null($checkUserCart)) {
                CartController::create();
            }
            $getData = DB::table('carts')
                ->select('CartID')
                ->where('carts.UserID', '=', auth()->user()->id)
                ->first();

            $t = DB::table('items')->updateOrInsert([
                'ProductID' => $id,
                'CartID' => $getData->CartID
            ],
            [
                'CartID' => $getData->CartID,
                'ProductID' => $id,
                'Quantity' => $request->Quantity
            ]);
        }
        return redirect(route('cart'));
    }

    public function removeItem($id)
    {
        $deleteData = DB::table('items')
            ->where('items.ProductID', '=', $id)
            ->delete();
        return redirect()->back();
    }

    public function editQty($id)
    {
        $Food = product::findOrFail($id);
        return view('layout.member.edit-qty', compact('Food'));
    }

    public function updateQty($id, Request $request)
    {
        $validate = $request->validate([
            'quantity' => ['required', 'integer', 'min:1'],
        ]);
        $getData = DB::table('carts')
            ->join('items', 'items.CartID', '=', 'carts.CartID')
            ->where('carts.UserID', '=', auth()->user()->UserID)
            ->where('items.ProductID', '=', $id)
            ->update([
                'Quantity' => $request->quantity
            ]);
        return view('layout.success-action.update-qty-success');
    }

}
