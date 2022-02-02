<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

	protected $table = 'clientes';
    protected $fillable = [
    	'nombre',
    	'apellido',
    	'direccion',
		'saldo',
		'limitecredito',
		'descuento'
    ];
    use HasFactory;

    public function pedido()
	{
		return $this->hasMany('App\Models\Pedido','pedido_id');
	}
}
