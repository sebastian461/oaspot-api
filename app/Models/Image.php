<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
  use HasFactory;

  /**
   * The primary key associated with the table.
   *
   * @var string
   */
  protected $primaryKey = 'parking_id';

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'image_name',
    'parking_id',
    'image_address',
  ];

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'image';

  public function parking(): BelongsTo
  {
    return $this->belongsTo(Parking::class, 'parking_id');
  }
}
