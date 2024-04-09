<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class WelcomeController extends Controller
{
    public function index()
    {
        $this->generateAdmin();
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);
            $accountType = $user['accountType'];

            if ($accountType == 1) {
                return redirect("/admin_dashboard");
            }
            if ($accountType == 2) {
                return redirect("/student_dashboard");
            }
        }
        return view('welcome');
    }

    private function generateAdmin()
    {
        $query = DB::table('accounts')->where('accountType', '=', '1')->get();
        $data = json_decode($query, true);
        if (count($data) == 0) {
            $newAdminAcccount = new Accounts();
            $newAdminAcccount->accountType = 1;
            $newAdminAcccount->studentNumber = "admin";
            $hashPass = Hash::make("adminpass");
            $newAdminAcccount->password = $hashPass;
            $newAdminAcccount->firstName = "Admin";
            $newAdminAcccount->lastName = "Admin";
            $newAdminAcccount->middleName = "Admin";
            $newAdminAcccount->level = "None";
            $newAdminAcccount->birthDate = date('Y-m-d', strtotime(now()));
            $newAdminAcccount->guardian = "None";
            $newAdminAcccount->contactNumber = "None";
            $newAdminAcccount->isActivated = "true";
            $newAdminAcccount->save();
        }
    }
}
