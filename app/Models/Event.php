<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'nome_evento',
        'local_evento',
        'data_evento',
        'nome_imagem',
        'caminho_imagem',
         
    ];

    protected $casts = 
    [
        'caminho_imagem' => 'array'
    ];
}
