<?php

namespace App\Http\Controllers;

use App\Models\UserHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminPasswordController extends Controller
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
            return view('admin.password', ['username' => $user['studentNumber']]);
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

            if ($request->btnUpdatePassword) {
                if (password_verify($request->oldPassword, $user['password'])) {
                    $newPassword = $request->newPassword;
                    $confirmPass = $request->confirmPass;

                    if ($newPassword == $confirmPass) {
                        $newPass = Hash::make($newPassword);
                        $updateCount = DB::table('accounts')->where('accountID', '=', $user['accountID'])->update([
                            'password' => $newPass,
                        ]);

                        if ($updateCount > 0) {
                            $user = session()->pull('users');
                            $user['password'] = $newPass;
                            session()->put('users', $user);
                            session()->put('successUpdatePassword', true);
                            $userHistory = new UserHistory();
                            $userHistory->accountID = $user['accountID'];
                            $userHistory->action = "Password Changed";
                            $userHistory->description = "Successful";
                            $userHistory->save();
                        } else {
                            session()->put('errorUpdatePassword', true);
                        }
                    } else {
                        session()->put('newPasswordNotMatch', true);
                    }
                } else {
                    session()->put('oldPasswordNotMatch', true);
                }
            }

            return redirect("/passwords");
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
