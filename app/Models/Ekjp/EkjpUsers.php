<?php

namespace App\Models\Ekjp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EkjpUsers extends Model
{
    use HasFactory;
    protected $fillable = [
        'noic',
        'nama',
        'email',
        'telefon',
    ];
}
