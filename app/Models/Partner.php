<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Partner extends Model
{
    use HasFactory;
    use HasRoles;
    protected $fillable = [
        'FirstName',
        'LastName',
        'Email',
        'Option',
        'Description'
    ];
}
