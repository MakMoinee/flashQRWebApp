<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserApprovedLog extends Model
{
    use HasFactory;
    protected $id = 'id';
    protected $table = 'user_approved_logs';

    protected $fillable = [
        'id',
        "accountID",
        "approver",
        "isActivated"
    ];
}
