<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Specify the table associated with the model (optional)
    protected $table = 'books';

    // Define the fillable attributes to allow mass assignment
    protected $fillable = [
        'title',
        'author',
        'published_year',
        'genre',
        'description',
    ];

    // Optionally, you can define any relationships here if needed in the future
    // For example, if you have an Author model, you can set up a relationship:
    // public function author() {
    //     return $this->belongsTo(Author::class);
    // }
}
