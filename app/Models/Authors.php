<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $table    = "authors";
    protected $fillable = [
        'id',
        'author_id',
        'author_name',
        'created_at',
        'updated_at'
    ];
}
