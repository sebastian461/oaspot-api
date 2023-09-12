<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Parking extends Model
{
  use HasFactory;

  /**
   * The primary key associated with the table.
   *
   * @var string
   */
  protected $primaryKey = 'parking_id';

  /**
   * The model's default values for attributes.
   *
   * @var array
   */
  protected $attributes = [
    'parking_delete' => false,
  ];

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'parking_name',
    'city_id',
    'parking_address',
    'parking_description',
    'parking_places',
    'parking_price',
  ];

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'parking';

  public function city(): BelongsTo
  {
    return $this->belongsTo(City::class, 'city_id');
  }

  public function image(): HasMany
  {
    return $this->hasMany(Image::class, 'parking_id');
  }

  public function application(): HasMany
  {
    return $this->hasMany(Application::class, 'parking_id');
  }
}
