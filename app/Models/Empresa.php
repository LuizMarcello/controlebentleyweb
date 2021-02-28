<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\AbstractPaginator;

class Empresa extends Model
{
    public static function todasPorTipo(string $tipo, int $quantidade=10): AbstractPaginator
    {   /* Fazendo um filtro */
        return self::where('tipo', $tipo)->paginate($quantidade);
    }
}
