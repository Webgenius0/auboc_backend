<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $hidden = [
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
        'colour_code',
    ];


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    // Define the relationship with the Review model
    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id', 'id');
    }



}
