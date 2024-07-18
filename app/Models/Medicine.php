<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'medicine_name',
        'quantity',
        'date_added',
        'expiration_date',
        'medicine_image',

    ];
}
