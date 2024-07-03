<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoProduto extends Model
{
    use SoftDeletes;

    protected $table = 'tip_prods';
    protected $primaryKey = 'id_tip_prod';
    protected $dates = [
                'created_at',
                'updated_at',
                'deleted_at'
    ];

    protected $fillable = [
        'tip_prods'
    ];
}
