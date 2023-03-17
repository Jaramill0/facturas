<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FacturasItem
 *
 * @property $id
 * @property $factura_id
 * @property $articulo_id
 * @property $cantidad
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FacturasItem extends Model
{
    
    static $rules = [
		'factura_id' => 'required',
		'articulo_id' => 'required',
		'cantidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['factura_id','articulo_id','cantidad'];


    public $timestamps = false;
}
