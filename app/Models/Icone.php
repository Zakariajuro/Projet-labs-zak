<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icone extends Model
{
    use HasFactory;
    public function homecartes(){
        return $this->hasMany(HomeCarte::class);
    }
    public function homeservices(){
        return $this->hasMany(Homeservice::class);
    }
    public function features(){
        return $this->hasMany(Feature::class);
    }
    public function featuresbis(){
        return $this->hasMany(Featurebis::class);
    }
}
