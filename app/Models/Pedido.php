<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = 'pedidos';
    protected $fillable = [
    	'fecha',
    	'descripcion',
    	'cliente_id'
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente','cliente_id');
    }

    public function articulo(){
        return $this->hasMany('App\Models\Articulo','articulo_id');
    }
}
