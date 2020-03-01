<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContaCategoria extends Model
{
    protected $fillable = [
        'ID_CONTACATEGORIA_CC',
        'ST_DESCRICAO_CC',
    ];

    protected $primaryKey = 'ID_CONTACATEGORIA_CC';

    public $timestamps = false;

    protected $table = 'CONTA_CATEGORIA';

    public function produto() {
        return $this->hasMany(Produtos::class, 'ID_CONTACATEGORIA_CC');
    }
}
