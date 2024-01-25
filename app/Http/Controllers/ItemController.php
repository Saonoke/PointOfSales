<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Contracts\ItemContract;
use App\Http\Requests\ItemRequest;
use Illuminate\Http\Response;

class ItemController extends Controller
{
    protected ItemContract $contract;

    public function __construct(ItemContract $contract)
    {
        $this->contract = $contract;
    }

    public function index(): View{
        $item = Item::latest()->get();

        return view('item.index', compact('item'));
    }
    public function addItem(): View{
        return view('item.create');
    }

    public function storeItem(ItemRequest $request): RedirectResponse{
        $validated = $request->validated();
        $this->contract->storeItem($validated);

        return redirect()->route('item.index')->with('success', 'Item added successfully.');
    }   

    public function updateItem(Item $item): View{
        return view('item.edit',compact('item'));
    }

    public function editItem(ItemRequest $request, Item $item): RedirectResponse{
        $validated = $request->validated();
        $this->contract->editItem($validated, $item);

        return redirect()->route('item.index')->with('success', 'Item updated successfully.');
    }

    public function deleteItem(Item $item): RedirectResponse{
        $this->contract->deleteItem($item);

        return redirect()->route('item.index')->with('success', 'Item deleted successfully.');
    }

    public function getCategory(){
        $this->contract->getCategory();
    }
}
