<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $primaryKey = 'idpost';
    protected $fillable = [
        'idpost',
        'title',
        'content',
        'date',
        'username'
    ];
    public $timestamps = false;

}
