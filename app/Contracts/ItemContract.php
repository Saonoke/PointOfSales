<?php

namespace App\Contracts;

use App\Models\Item;

interface ItemContract{

    public function storeItem(array $validatedData):void;

    public function editItem(array $validatedData, Item $item):void;

    public function deleteItem(Item $item):void;

    public function getCategory();
}