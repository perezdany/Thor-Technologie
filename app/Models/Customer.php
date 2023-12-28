<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{
    use HasFactory, Notifiable;
   
    
     public $timestamps = false;

      protected $fillable = [
        'firstname',
        'lastname',
        'user_tel',
        'user_email',
        'address',
		    'password',
        'confirmation_token',
    ];
}
