<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\UserHistory;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);
            $accountType = $user['accountType'];

            if ($accountType != 1) {
                return redirect("/");
            }
            $users = DB::table('vwusers')
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            $results = DB::table('vwresults')->get();
            $arrResult = array();
            $arr = array();

            foreach ($results as $r) {
                $r->created_at = (new DateTime($r->created_at))->setTimezone(new DateTimeZone('Asia/Manila'))->format('Y-m-d h:i A');

                if (isset($arrResult[$r->accountID])) {
                    $d =  $arrResult[$r->accountID];
                    array_push($d, $r);
                    $arrResult[$r->accountID] = $d;
                } else {
                    $arr = array();
                    array_push($arr, $r);
                    $arrResult[$r->accountID] = $arr;
                }
            }


            $accounts = Accounts::all();
            $data = array();
            foreach ($accounts as $a) {
                $data[$a['accountID']] = $a['lastName'] . ', ' . $a['firstName'] . ' ' . $a['middleName'];
            }

            return view('admin.user_records', ['users' => $users, 'approver' => $data, 'results' => $arrResult]);
        }
        return redirect("/");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);
            $accountType = $user['accountType'];

            if ($accountType != 1) {
                return redirect("/");
            }

            if ($request->btnAdminUpdatePassword) {
                $accountID = $request->accountID;
                $newPassword = $request->newPassword;
                $confirmPass = $request->confirmPass;

                if ($newPassword == $confirmPass) {
                    $newPass = Hash::make($newPassword);
                    $updateCount = DB::table('accounts')->where('accountID', '=', $accountID)->update([
                        'password' => $newPass,
                    ]);

                    if ($updateCount > 0) {
                        session()->put('successAdminUpdatePassword', true);
                        $userHistory = new UserHistory();
                        $userHistory->accountID = $user['accountID'];
                        $userHistory->action = "Password Changed";
                        $userHistory->description = "Successful, User: ". $accountID;
                        $userHistory->save();
                    } else {
                        session()->put('errorAdminUpdatePassword', true);
                    }
                } else {
                    session()->put('adminNewPasswordNotMatch', true);
                }
            }
            return redirect("/user_records");
        }
        return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
