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
            'Address'
    ];
    // public function user(){
    //     return $this-> belongsTo(User::class,'foreign_key');
    // }
}
