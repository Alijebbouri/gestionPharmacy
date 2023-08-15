<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['id_user','id_produit','quantity'];
    public function user(){
    return $this->belongsTo(User::class, 'id_user','id');
    }
    public function produit(){
        return $this->belongsTo(Produit::class,'id_produit','id');
    }
}
