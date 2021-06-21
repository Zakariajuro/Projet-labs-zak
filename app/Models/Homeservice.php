<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homeservice extends Model
{
    use HasFactory;
    public function icone(){
        return $this->belongsTo(Icone::class);
    }
    protected $table = 'homeservices';
}
