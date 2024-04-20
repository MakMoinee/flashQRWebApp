<?php

namespace App\Http\Controllers;

use App\Models\UserHistory;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function index()
    {
        $user = session()->pull('users');
        $userHistory = new UserHistory();
        $userHistory->accountID = $user['accountID'];
        $userHistory->action = "Logout";
        $userHistory->description = "Success";
        $userHistory->save();
        session()->flush();
        return redirect('/');
    }
}
