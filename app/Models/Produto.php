<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\{
    TipoProduto,
    ProdutoTamanho
};

class Produto extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'produtos';
    protected $primaryKey = 'id_produto';

    protected $dates = [
                'created_at',
                'updated_at',
                'deleted_at'
    ];

    protected $fillable = [
        'id_tip_prod',
        'nome',
        'descricao',
        'foto',
        'observacoes'
    ];

    /**
     * ------------------------------------------------------------
     *  RELACIONAMENTOS
     * ------------------------------------------------------------
     */

        public function tipo(): object {
            return $this->hasOne( TipoProduto::class,
                                    'id_tip_prod',
                                    'id_tip_prod');
        }

        public function tamanhos(): object {
            return $this->belongsTo(
                ProdutoTamanho::class,
                'id_produto',
                'id_produto'
            );
        }

}
