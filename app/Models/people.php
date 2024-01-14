<?php

namespace app\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    /**
     * @var string
     */
    protected $table = 'people';

    /**
    
     * @var array<int, string>
     */

    protected $fillable = [
        'name',
        'surname',
        'phone_number',
        'street',
        'country',
    ];

    /**
     * @var array<int, string>
     */
    protected $hidden = [];

    /**
     * @var array<string, string>
     */
    protected $casts = [];
}