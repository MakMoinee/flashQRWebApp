<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlashCard extends Model
{
    use HasFactory;
    protected $id = 'flashCardID';
    protected $table = 'flash_cards';

    protected $fillable = [
        'flashCardID',
        "flashCardName",
        "imagePath",
        "accountID",
        "createdBy",
        "description",
    ];
}
