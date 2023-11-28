<?php

namespace App\Models\Ekjp;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EkjpKursuses extends Model
{
    //use HasFactory;
    protected $fillable = [
        'kursus',
        'bidang',
        'yuran',
        'tarikh',
        'kandungan',
        'catatan',
        'tempoh',
    ];


}
