<?php

namespace App\Services\Impl;

use App\Models\Item;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\User;
use App\Services\TransactionService;
use PHPUnit\Event\Tracer\Tracer;

class TransactionServiceImpl implements TransactionService
{
    public function findByUser(User $user): Transaction
    {
        $transaction = Transaction::with(
            'transactionDetail',
            'transactionDetail.item',
        )->ForCashier($user);
        return $transaction;
    }

    public function addTransaction(User $user): Transaction
    {
        return Transaction::create([
            'transaction_date' => now(),
            'cashier_id' => $user->id
        ]);
    }

    public function addItem(Transaction $transaction, Item $item, $qty): TransactionDetail
    {
        $transactionDetail = TransactionDetail::create([
            'transaction_id' => $transaction->id,
            'item_id' => $item->id,
            'qty' => $qty
        ]);
        $item->decrement('stock', $qty);

        return $transactionDetail;
    
    }

    public function calculateTotalPurchase(Transaction $transaction): void
    {
        $totalPurchase = 0;
        foreach ($transaction->transactionDetail as $td) {
            $totalPurchase += $td->getSubTotal();
        }

        $transaction->update([
            'total_purchase' => $totalPurchase
        ]);
    }
}
