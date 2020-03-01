<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = [
        'ID_PRODUTO_PRD',
        'ST_DESCRICAO_PRD',
        'ID_CONTACATEGORIA_CC'
    ];

    protected $primaryKey = 'ID_PRODUTO_PRD';

    public $timestamps = false;

    protected $table = 'PRODUTOS';

    // public function categoria() {
    //     return $this->belongsTo(ContaCategoria::class, 'ID_CONTACATEGORIA_CC');
    // }

    public function categoria() {
        return $this->hasMany(ContaCategoria::class, 'ID_CONTACATEGORIA_CC');
    }
}
