<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\AbstractPaginator;

class Empresa extends Model
{
    /* Por questão de segurança, o "fillable" é para dizer quais são
       os únicos campos que serão aceitos pelo model. O usuário poderia
       tentar inspecionar e injetar algum campo a mais, lá no front. */
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'razao_social', 'documento', 'ie_rg', 'nome_contato', 'celular',
        'email', 'telefone', 'cep', 'bairro', 'cidade', 'estado',
        'observacao', 'tipo', 'situacao','rua'
    ];

    /**
     * Retorna empresas por tipo
     *
     * @param string $tipo
     * @param integer $quantidade
     * @return AbstractPaginator
     */
    public static function todasPorTipo(string $tipo, int $quantidade = 5): AbstractPaginator
    {
        /* Fazendo um filtro */
        return self::where('tipo', $tipo)->paginate($quantidade);
    }
}
