<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Application extends Model
{
  use HasFactory;

  /**
   * The primary key associated with the table.
   *
   * @var string
   */
  protected $primaryKey = 'application_id';

  /**
   * The model's default values for attributes.
   *
   * @var array
   */
  protected $attributes = [
    'application_delete' => false,
  ];

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'parking_id',
    'user_id',
    'application_status'
  ];

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'application';

  public function parking(): BelongsTo
  {
    return $this->belongsTo(Parking::class, 'parking_id');
  }

  public function user(): BelongsTo
  {
    return $this->belongsTo(Parking::class, 'user_id');
  }

  public function document(): HasMany
  {
    return $this->hasMany(Document::class, 'application_id');
  }
}
