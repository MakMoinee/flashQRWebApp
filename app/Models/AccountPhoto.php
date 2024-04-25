<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountPhoto extends Model
{
    use HasFactory;
    protected $id = 'photoID';
    protected $table = 'account_photos';

    protected $fillable = [
        'accountID',
        "photoID",
        "imagePath",
    ];
}
