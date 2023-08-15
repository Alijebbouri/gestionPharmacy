<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $table = 'order_items';
    protected $fillable = ['id_order','id_produit','prix','quantity'];
    public function produits(){
        return $this->belongsTo(Produit::class,'id_produit','id');
    }
    public function order()
{
    return $this->belongsTo(Order::class, 'id_order', 'id');
}
}
