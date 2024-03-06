<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'prix'];
    public function commentaires()
    {
        return $this->hasMany(Commentaire::class,'produit_id');
    }
}
