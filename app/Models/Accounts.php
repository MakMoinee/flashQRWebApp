<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;
    protected $id = 'accountID';
    protected $table = 'accounts';

    protected $fillable = [
        'accountID',
        "firstName",
        "middleName",
        "lastName",
        'password',
        'address',
        'birthDate',
        'contactNumber',
        'level',
        'accountType',
        'studentNumber',
        'guardian',
        'isActivated',
    ];
}
