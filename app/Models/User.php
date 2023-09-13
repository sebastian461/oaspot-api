<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable;

  /**
   * The model's default values for attributes.
   *
   * @var array
   */
  protected $attributes = [
    'user_delete' => false,
    'rol_name' => 'Cliente',
  ];

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'email',
    'person_cedula',
    'password'
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * The attributes that should be cast.
   *
   * @var array<string, string>
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
    'password' => 'hashed',
  ];

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'user';

  public function person(): BelongsTo
  {
    return $this->belongsTo(Person::class, 'person_cedula');
  }

  public function rol(): BelongsTo
  {
    return $this->belongsTo(Rol::class, 'rol_name');
  }

  public function application(): HasMany
  {
    return $this->hasMany(Application::class, 'user_id');
  }
}
