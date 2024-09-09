<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionType extends Model
{
    protected $fillable = ['name', 'description'];

    // Relación existente: Un tipo de transacción tiene muchas transacciones
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
