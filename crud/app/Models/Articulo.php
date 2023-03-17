<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Articulo
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $precio
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Articulo extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'nombre' => 'required',
		'precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','nombre','precio'];

public $timestamps = false;

}
