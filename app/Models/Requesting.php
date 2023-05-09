<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requesting extends Model
{
    use HasFactory;

     public $timestamps = false;

      protected $fillable = [
		'id_requesting',
        'object',
        'device',
        'requesting_date',
        'requesting_hr',
        'status',
		'number',
        'id'
    ];
	
	
}
