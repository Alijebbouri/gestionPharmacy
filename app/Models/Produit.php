<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['nom_produit','dosage','image','date_peremption','prix_unitaire','quantite_en_stock'];
    public function order_items(){
        return $this->hasMany(OrderItem::class,'id_produit','id');
    }
    public function wishlists()
    {
        return $this->hasMany(Wishlist::class,'id_produit','id');
    }
    public function carts()
    {
        return $this->hasMany(Cart::class,'id_produit','id');
    }
}
