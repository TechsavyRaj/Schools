<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schools extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'address',
        'city',
        'state',
        'contact',
        'image',
        'email_id',
    ];
}
