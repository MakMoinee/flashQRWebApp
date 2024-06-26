<?php

namespace App\Http\Controllers;

use App\Models\UserHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
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

            if ($accountType == 1) {
                return redirect("/admin_dashboard");
            }

            if ($accountType == 2) {
                return redirect("/student_dashboard");
            }
        }
        return view('login');
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
        if ($request->btnLogin) {
            $password = $request->password;
            $queryResults = DB::table('accounts')->where('studentNumber', '=', $request->studentNumber)->get();
            $data = array();
            $data = json_decode($queryResults, true);
            $user = array();
            foreach ($data as $d) {
                if (password_verify($password, $d['password'])) {
                    $user = $d;
                    break;
                }
            }

            if (count($user) > 0) {
                $isActivated = $user['isActivated'];
                if ($isActivated) {
                    session()->put('users', $user);
                    session()->put('successLogin', true);
                    $accountType = $user['accountType'];
                    if ($accountType == 1) {
                        return redirect("/admin_dashboard");
                    } else if ($accountType == 2) {
                        $userHistory = new UserHistory();
                        $userHistory->accountID = $user['accountID'];
                        $userHistory->action = "Login";
                        $userHistory->description = "Successful";
                        $userHistory->save();
                        return redirect("/student_dashboard");
                    }
                } else {
                    session()->put("errorNotActivated", true);
                }
            } else {
                session()->put('errorLogin', true);
            }
        }
        return redirect("/login");
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
