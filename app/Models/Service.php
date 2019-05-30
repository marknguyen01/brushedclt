<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
    public function parentService() {
        return $this->belongsTo('App\Models\Service', 'service_id');
    }
    public function subServices() {
        return $this->hasMany('App\Models\Service');
    }
}
