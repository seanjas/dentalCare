<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

    protected $fillable = [
    'name',
    'email',
    'password',
    'phone',
    'confirm_password',
    'image',];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

}
