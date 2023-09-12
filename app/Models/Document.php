<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document extends Model
{
  use HasFactory;

  /**
   * The primary key associated with the table.
   *
   * @var string
   */
  protected $primaryKey = 'document_id';

  /**
   * The model's default values for attributes.
   *
   * @var array
   */
  protected $attributes = [
    'document_delete' => false,
  ];

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'application_id',
    'document_name',
    'document_address'
  ];

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'document';

  public function application(): BelongsTo
  {
    return $this->belongsTo(Application::class, 'application_id');
  }
}
