<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['id_user','fname','lname','email','phone','address1','address2','city','region','pays','code_postal','total_price','status','message','tracking_no'];
    public function user() {
        return $this->belongsTo(User::class,'id_user','id');
    }
    public function orderitems()
{
    return $this->hasMany(OrderItem::class, 'id_order', 'id');
}
}
