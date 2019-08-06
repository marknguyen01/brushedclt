<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable  = ['username', 'rating', 'comment', 'created_at', 'profile_photo', 'review_id'];
    protected $dateFormat = 'Y-m-d H:i:s';
    public $timestamps = false;
}
