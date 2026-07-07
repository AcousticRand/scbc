<?php

namespace App\Models;

use Database\Factories\ProducerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    /** @use HasFactory<ProducerFactory> */
    use HasFactory;

    protected $guarded = [];
}
