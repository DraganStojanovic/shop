<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    const TABLE = "contacts";
    protected $table = self::TABLE;
//    protected $table = "contact";

    protected $fillable = [
        "email","subject","message"
    ];

}
