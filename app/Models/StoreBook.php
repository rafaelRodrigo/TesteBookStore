<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreBook extends Model
{
    protected $table = 'stores_books';
    use HasFactory;

    protected $fillable = [
        'store_id',
        'book_id'

    ];

    public function book()
    {
        return $this->belongsToMany(Book::class);
    }
    public function store()
    {
        return $this->belongsToMany(Store::class);
    }
}
