<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Account extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'balance'];

    // Una cuenta pertenece a un usuario
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

// Una cuenta tiene muchas transacciones
    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

// Una cuenta tiene muchas transacciones recurrentes
    public function recurringTransactions():HasMany
    {
        return $this->hasMany(RecurringTransaction::class);
    }
}