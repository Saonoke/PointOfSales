<?php

namespace Tests\Feature;

use App\Models\Item;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Tests\TestCase;

class TransactionTest extends TestCase
{


    public function testSubTotal()
    {
        $user = User::factory()->create();
        $item = Item::factory()->create(['stock' => 10]);
        $transaction = Transaction::factory()->create(['cashier_id' => $user->id, 'transaction_date' => now(), 'total_purchase' => 0, 'total_payment' => 0, 'change' => 0]);
        $transactionDetail = TransactionDetail::factory()->create([
            'transaction_id' => $transaction->id,
            'item_id' => $item->id,
            'qty' => 2,
        ]);
        $subTotal = $transactionDetail->getSubTotal();
        $this->assertEquals($item->price * 2, $subTotal);
    }
    public function testTransaction()
    {
        $user = User::factory()->create(['role' => 'cashier']);
        $item = Item::factory()->create(['stock' => 10]);
        $request = Request::create(route('transaction.store'), 'POST', [
            'items' => [
                ['item_id' => $item->id, 'qty' => 5]
            ],
        ]);
        $response = $this->actingAs($user)->post(route('transaction.store'), $request->all());
        $response->assertStatus(200);
        $this->assertDatabaseHas('transaction', [
            'cashier_id' => $user->id,
            'total_purchase' => 5 * $item->price,
        ]);
    }
}
