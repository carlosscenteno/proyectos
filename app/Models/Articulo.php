<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    protected $table = 'articulos';
    protected $fillable = [
    	'distribuidores',
    	'existencia',
    	'descripcion',
        'pedido_id'
    ];

    public function pedido()
    {
        return $this->belongsTo('App\Models\Pedido','pedido_id');
    }
}
