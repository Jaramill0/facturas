<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Pedido
 *
 * @property $id
 * @property $cliente_id
 * @property $codigo
 * @property $fecha
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pedido extends Model
{

  static $rules = [
    'cliente_id' => 'required',
    'codigo' => 'required',
    'fecha' => 'required',
  ];

  protected $perPage = 20;

  public function cliente(): BelongsTo
  {
    return $this->belongsTo(Cliente::class);
  }
  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['cliente_id', 'codigo', 'fecha'];

  public $timestamps = false;
}
