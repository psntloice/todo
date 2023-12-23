<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
//ADDED
use Illuminate\Database\Eloquent\Relations\HasMany;


class User extends Authenticatable
//class User extends Models
{
    use HasApiTokens, HasFactory, Notifiable;
// ...ADDED
/*
public function todos(): HasMany
{
    return $this->hasMany(Todo::class);
}
   */
// Specify the primary key column explicitly
protected $primaryKey = 'id';

public function todos()
{
    // Specify the foreign key column explicitly
    return $this->hasMany(Todo::class, 'user_id');
}
/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
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
}
