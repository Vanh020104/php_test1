<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    //protected $primaryKey = "id", ?? neu la id thi ko can noi

    protected $fillable = [
        "name",
        "slug",
        "price",
        "thumbnail",
        "description",
        "qty",
        "category_id"
    ];

}
