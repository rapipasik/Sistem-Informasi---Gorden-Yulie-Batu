<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    // Mass assignment: kolom yang boleh diisi secara massal
    protected $fillable = ['name', 'slug'];

    // Relasi ke tabel Product
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
