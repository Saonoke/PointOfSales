<?php

namespace App\Services\Impl;

use App\Models\Item;
use App\Models\Transaction;
use App\Models\User;
use App\Services\ItemService;
use App\Services\TransactionService;



class ItemServiceImpl implements ItemService
{
    public function findByID($id){
        return Item::where('id',$id)->firstOrFail();
    }
}
