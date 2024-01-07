<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DadosBancarioModel extends Model
{
    protected $table = 'dados_bancarios';
    protected $primaryKey = 'id_dados';

    use HasFactory;
}
