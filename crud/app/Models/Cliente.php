<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Cliente
 *
 * @property $id
 * @property $nombre
 * @property $razon_social
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{

  static $rules = [
    'nombre' => 'required',
    'razon_social' => 'required',
  ];

  public function pedido(): BelongsTo
  {
    return $this->belongsTo(Cliente::class);
  }

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['nombre', 'razon_social'];
  public $timestamps = false;
}
