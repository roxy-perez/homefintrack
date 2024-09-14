<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static create(int[] $array)
 */
class RecurringTransaction extends Model
{
    use HasFactory;

    // Llenado masivo
    protected $fillable = [
        'account_id',
        'category_id',
        'transaction_type_id',
        'amount',
        'description',
        'start_date',
        'end_date',
        'frequency',
        'next_run_date',
    ];

    // Una transacción recurrente pertenece a una cuenta
    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }

    // Una transacción recurrente pertenece a una categoría
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // Una transacción recurrente tiene un tipo (ingreso/gasto)
    public function transactionType(): BelongsTo
    {
        return $this->belongsTo(TransactionType::class);
    }

    // Obtener la frecuencia en un formato legible
    public function getFrequencyAttribute($value): string
    {
        switch ($value) {
            case 'daily':
                return 'Diaria';
            case 'weekly':
                return 'Semanal';
            case 'monthly':
                return 'Mensual';
            case 'yearly':
                return 'Anual';
            default:
                return 'Desconocida';
        }
    }

    // Verificar si una transacción recurrente está activa
    public function isActive(): bool
    {
        $today = now();

        return $this->start_date <= $today && ($this->end_date === null || $this->end_date >= $today);
    }
}
