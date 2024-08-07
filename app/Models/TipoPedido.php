<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoPedido extends Model
{
    use SoftDeletes;

    protected $table = 'tip_ped';
    protected $primaryKey = 'id_tipos_ped';
    protected $dates = [
                'created_at',
                'updated_at',
                'deleted_at'
    ];

    protected $fillable = [
        'tip_ped'
    ];

}
