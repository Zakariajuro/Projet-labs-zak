<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public function categorie() {
        return $this->belongsTo(Categorie::class);
    }
    public function tags() {
        return $this->belongsToMany(Tag::class, 'articletags', 'article_id');
    }
    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
