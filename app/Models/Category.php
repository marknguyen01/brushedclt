<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function services() {
        return $this->hasMany('App\Models\Service');
    }

    public function parentCategory() {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function subCategories() {
        return $this->hasMany('App\Models\Category');
    }
}
