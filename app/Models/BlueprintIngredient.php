<?php

namespace App\Models;

use Database\Factories\BlueprintIngredientFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlueprintIngredient extends Model
{
    /** @use HasFactory<BlueprintIngredientFactory> */
    use HasFactory;

    protected $guarded = [];

    public function blueprint(): BelongsTo
    {
        return $this->belongsTo(Blueprint::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
