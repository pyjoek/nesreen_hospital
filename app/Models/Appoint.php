<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appoint extends Model
{
    use HasFactory;

    protected $fillable = [
        'docname','fname','age','sex','occu','addr',
        'phone','email','authn','cardn','date','payment'
    ];
}
