<?php

namespace App\Models;

use Database\Factories\BlueprintIngredientFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlueprintIngredient extends Model
{
    /** @use HasFactory<BlueprintIngredientFactory> */
    use HasFactory;

    protected $guarded = [];
}
