<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class City extends Model
{
  use HasFactory;

  /**
   * The primary key associated with the table.
   *
   * @var string
   */
  protected $primaryKey = 'city_id';

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
  protected $keyType = 'char';

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'city_id',
    'country_id',
    'city_name',
  ];

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'city';

  public function country(): BelongsTo
  {
    return $this->belongsTo(Country::class, 'country_id');
  }

  public function parking(): HasOne
  {
    return $this->hasOne(Parking::class, 'city_id');
  }

  public function person(): HasOne
  {
    return $this->hasOne(Person::class, 'city_id');
  }
}
