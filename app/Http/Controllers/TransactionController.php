<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Models\Item;
use App\Models\TransactionDetail;
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
        return response()->view("cashier.transaction", compact('transaction'));
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $transaction = $this->transactionService->addTransaction($user);
        $items = $request->get('items');
        $qty = $items[0]['qty'];
        $itemID = array_column($items, 'item_id');
        $qty = array_column($items, 'qty');
        $items = Item::with('transactionDetail')->findMany($itemID);

        $transactionDetails = [];
        foreach ($items as $key => $item) {
            $transactionDetails[] = [
                'transaction_id' => $transaction->id,
                'item_id' => $item->id,
                'qty' => $qty[$key],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        TransactionDetail::insert($transactionDetails);
        $this->transactionService->calculateTotalPurchase($transaction);
    }
}
