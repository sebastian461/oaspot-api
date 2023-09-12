<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Rol extends Model
{
  use HasFactory;

  /**
   * The primary key associated with the table.
   *
   * @var string
   */
  protected $primaryKey = 'rol_name';

  /**
   * Indicates if the model's ID is auto-incrementing.
   *
   * @var bool
   */
  public $incrementing = false;

  /**
   * The data type of the auto-incrementing ID.
   *
   * @var string
   */
  protected $keyType = 'string';

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'rol_description',
  ];

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'rol';

  public function user(): HasOne
  {
    return $this->hasOne(User::class, 'rol_name');
  }
}
