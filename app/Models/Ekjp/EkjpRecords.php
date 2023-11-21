<?php

namespace App\Models\Ekjp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EkjpRecords extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_noic',
        'kursus_id',
];
}
