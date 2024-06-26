<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    const TABLE = "products";
    protected $table = self::TABLE;
//    protected $table = 'products';

    protected $fillable = [
        "name","description","amount","price","image",
    ];

}
