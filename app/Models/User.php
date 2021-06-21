<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'description',
        'genre_id',
        'role_id',
        'poste_id',
        'image',
        'email',
        'password',
        'validate',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function genre(){
        return $this->belongsTo(Genre::class);
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function poste(){
        return $this->belongsTo(Poste::class);
    }
    public function articles(){
        return $this->hasMany(Article::class); 
    }
}
