<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
    'name',
    'email',
    'password',
    'phone',
    'confirm_password',
    'patient_image',
];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
