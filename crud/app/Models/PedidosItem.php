<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PedidosItem
 *
 * @property $id
 * @property $pedido_id
 * @property $articulo_id
 * @property $cantidad
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PedidosItem extends Model
{
    
    static $rules = [
		'pedido_id' => 'required',
		'articulo_id' => 'required',
		'cantidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['pedido_id','articulo_id','cantidad'];


    public $timestamps = false;
}
