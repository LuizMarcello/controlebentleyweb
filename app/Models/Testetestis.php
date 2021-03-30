<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testetestis extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'testetestes';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'nome_razaosocial', 'ie_rg', 'documento', 'nome_contato', 'celular1', 'celular2', 'telefone1', 'telefone2', 'email', 'instalador', 'banda', 'formapagamento'];

    
}
