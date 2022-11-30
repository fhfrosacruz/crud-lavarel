<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadastrosModel extends Model
{
    //use HasFactory;
    protected $table = 'cadastro'; //nome da tabela que vai ser criada quando rodar o migration
    protected $fillable = ['nome', 'cpf', 'endereco']; //medida de segurança do laravel, so grava no db esses campos da tbl
}
