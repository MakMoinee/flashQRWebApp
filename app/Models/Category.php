<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $id = 'categoryID';
    protected $table = 'categories';

    protected $fillable = [
        'categoryID',
        "categoryName",
        "imagePath",
    ];
}
