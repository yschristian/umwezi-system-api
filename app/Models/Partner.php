<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Partner extends Model
{
    use HasFactory;
    protected $fillable = [
        'FirstName',
        'LastName',
        'Email',
        'Option',
        'Description',
        'Status'
    ];
}
