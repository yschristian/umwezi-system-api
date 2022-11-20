<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
            'Title',
            'Description',
            'Image',
            'Categories',
            'Price',
            'Address',
            'user_id'
    ];
    protected $casts=['Image'=>'array'];
    public function user(){
        return $this-> belongsTo(User::class);
    }
    public function order(){
        return $this-> hasMany(Order::class);
    }
    public function cart(){
        return $this-> hasMany(Cart::class);
    }
}
