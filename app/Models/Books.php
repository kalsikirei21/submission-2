<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $primaryKey='id';
    protected $tabel ="books";
    protected $fillable = [
        'id',
        'book_name',
        'author',
        'author_id',
        'published_at',
        'create_at',
        'update_at'
    ];
    // protected $guarded = [];
    use HasFactory;
}
