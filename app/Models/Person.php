<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Person extends Model
{
  use HasFactory;

  /**
   * The primary key associated with the table.
   *
   * @var string
   */
  protected $primaryKey = 'person_cedula';

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
   * The model's default values for attributes.
   *
   * @var array
   */
  protected $attributes = [
    'person_delete' => false,
  ];

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'person_cedula',
    'person_name',
    'person_lastname',
    'person_phone',
    'city_id',
    'person_address',
  ];

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'person';

  public function City(): BelongsTo
  {
    return $this->belongsTo(City::class, 'city_id');
  }

  public function user(): HasOne
  {
    return $this->hasOne(User::class, 'person_cedula');
  }
}
