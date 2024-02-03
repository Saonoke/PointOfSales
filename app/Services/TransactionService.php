<?php

namespace App\Services;

use App\Http\Requests\AuthenticateRequest;
use App\Models\Item;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\User;

interface TransactionService
{
    public function findByUser(User $user);
    public function addTransaction(User $user) : Transaction;
    public function addItem(Transaction $transaction, Item $item, $qty) : TransactionDetail;
    public function calculateTotalPurchase(Transaction $transaction);

}
