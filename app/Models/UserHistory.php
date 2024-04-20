<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHistory extends Model
{
    use HasFactory;
    protected $id = 'userHistoryID';
    protected $table = 'user_histories';

    protected $fillable = [
        'userHistoryID',
        "accountID",
        "action",
        "description",
        "created_at"
    ];
}
