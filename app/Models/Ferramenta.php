<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ferramenta extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ferramentas';

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
    protected $fillable = ['user_id', 'classificacao', 'controle', 'categoria', 'medida', 'Descricao', 'Qtde', 'situacao', 'responsavel', 'desde'];

    
}
