<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Budget extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'amount_limit', 'start_date', 'end_date'];

    // Un presupuesto está relacionado con una categoría
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
