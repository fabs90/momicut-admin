<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerReview extends Model
{
    use HasFactory;

    protected $table = "customer_reviews";

    protected $fillable = [
        'username',
        'rating',
        'comments'
    ];
}