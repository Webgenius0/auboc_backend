<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'description',
        'rating',
        'image',
        'status',
    ];

    protected $hidden = [
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    // Define the inverse relationship with the Product model
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

}
