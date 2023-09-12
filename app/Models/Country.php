<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Country extends Model
{
  use HasFactory;

  /**
   * The primary key associated with the table.
   *
   * @var string
   */
  protected $primaryKey = 'country_id';

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
    'country_id',
    'country_name',
    'country_ext',
  ];

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'country';

  public function city(): HasMany
  {
    return $this->hasMany(City::class, 'country_id');
  }
}
