<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactMail extends Model
{
     use HasFactory;
     protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'comment',
    ];
    protected static function booted()
    {
        static::addGlobalScope('latest', function ($query) {
            $query->orderBy('created_at', 'desc');
        });
    }
}