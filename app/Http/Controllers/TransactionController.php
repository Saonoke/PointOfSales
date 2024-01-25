<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
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
        $this->data['transaction'] = $transaction;
        dd($transaction->toArray());
        return response()
            ->view("cashier.transaction", $this->data);
    }

    public function store(Request $request)
    {
        // $validated = $request->validated();
        $transaction = $this->transactionService->addTransaction(auth()->user());
        $items = $request->get('items');
        foreach ($items as $item) {
            $itemID = $item['item_id'];
            $qty = $item['qty'];
            $item = $this->itemService->findByID($itemID);
            if ($item) {
                $transactionDetail = $this->transactionService->addItem($transaction, $item, $qty);
            } else {
                return redirect()->back()->with('error', 'Item not found!');
            }
        }
        $this->transactionService->calculateTotalPurchase($transaction);
    }
}
