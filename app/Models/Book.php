<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    /**
     * Book model
     * 
     * The attributes that are mass assignable
     * 
     * title and description
     */
    protected $fillable = [
        'title', 'description'
    ];
}
