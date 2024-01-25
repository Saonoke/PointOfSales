<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transaction';

    protected $fillable = [
        'transaction_date',
        'total_purchase',
        'cashier_id',
        'total_purchase',
        'total_payment',
        'change'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transactionDetail()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    public function scopeForCashier(Builder $query, User $user): void
    {
        $query->where('cashier_id', $user->id);
    }
}
