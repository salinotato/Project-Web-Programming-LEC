<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\History;
use App\Models\HistoryList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HistoryController;

class HistoryController extends Controller
{
    public function createTransactionDetail($id,$CartID)
    {
        $transaction = DB::table('histories')
        ->select('*')
        ->where(['histories.TransactionID' => $id])
        ->get();

        foreach($transaction as $tr){
            $items = Item::where('CartID','=',$CartID)
                ->get();
            foreach($items as $item){
                HistoryList::create([
                    'TransactionID' => $tr->TransactionID,
                    'ProductID' => $item->ProductID,
                    'quantity' => $item->Quantity
                ]);
            }{{  }}
        }
    }

    public function checkout($cartID, $total)
    {
        History::create([
            'UserID' => auth()->user()->id,
            'totalPrice' => $total
        ]);
        $transID = DB::table('histories')
            ->orderByDesc('TransactionID')
            ->first();
        HistoryController::createTransactionDetail($transID->TransactionID,$cartID);
        CartController::deleteCart($cartID);
        return redirect(route('history'));
    }

    public function viewTransaction()
    {
        $title = 'History';
        $transactions = DB::table('histories')
        ->select('*')
        ->where(['histories.UserID' => auth()->user()->id])
        ->get();


        $transactionDetail = [];
        foreach ($transactions as $session){
            // $detail = HistoryList::where('TransactionID','=',$session->TransactionID)->get();

            $detail = DB::table('history_lists')
            ->select('*')
            ->join('products','history_lists.ProductID','=','products.ProductID')
            ->where(['history_lists.TransactionID' => $session->TransactionID])
            ->get();

            $transactionDetail[] = $detail;
        }


            // dd($transactions,$transactionDetail);
        // echo $transactions[0]->TransactionDetail;
        return view('pages.history', compact('transactions','transactionDetail','title'));
    }
}
