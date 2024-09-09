<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['account_id', 'category_id', 'transaction_type_id', 'amount', 'description'];

    // Una transacción pertenece a una cuenta
    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    // Una transacción pertenece a una categoría
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Una transacción tiene un tipo (ingreso/gasto)
    public function transactionType()
    {
        return $this->belongsTo(TransactionType::class);
    }
}
