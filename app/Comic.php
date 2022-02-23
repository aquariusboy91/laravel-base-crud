<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'titolo',
        'editore',
        'trama',
        'numero',
        'photo',
        'data_uscita',
        'prezzo',
        'created_at',
        'updated_at',
    ];
}
