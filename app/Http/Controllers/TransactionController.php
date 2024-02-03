<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Models\Item;
use App\Services\ItemService;
use App\Services\TransactionService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{

    public function __construct(private TransactionService $transactionService, private ItemService $itemService)
    {
    }

    public function index()
    {
        $transaction = $this->transactionService->findByUser(auth()->user())->get();
        if ($transaction == null) {
            return response()->view("cashier.transaction");
        } else {
            $transaction = $transaction->get();
            // dd($transaction);
            return response()->view("cashier.transaction", compact('transaction'));
        }    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $transaction = $this->transactionService->addTransaction($user);
        $items = $request->get('items');
        $qty = $items[0]['qty'];
        $itemID = array_column($items, 'item_id');
        $items = Item::with('transactionDetail')->findMany($itemID);

        foreach ($items as $item) {
            $transactionDetail = $this->transactionService->addItem($transaction, $item, $qty);
        }

        $this->transactionService->calculateTotalPurchase($transaction);
    }
}
