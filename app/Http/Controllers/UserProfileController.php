<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
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


            if ($accountType != 2) {
                return redirect("/");
            }

            $currentYear = date('Y');
            $years = range(1990, $currentYear);

            $monthText = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

            $birthMonth =  (new DateTime($user['birthDate']))->setTimezone(new DateTimeZone('Asia/Manila'))->format('m');
            $birthYear =  (new DateTime($user['birthDate']))->setTimezone(new DateTimeZone('Asia/Manila'))->format('Y');
            $birthDay =  (new DateTime($user['birthDate']))->setTimezone(new DateTimeZone('Asia/Manila'))->format('d');


            return view('student.profiles', [
                'yrs' => $years,
                'currentUser' => $user,
                'months' => 12,
                'monthText' => $monthText,
                'birthMonth' => $birthMonth,
                'birthYear' => $birthYear,
                'birthDay' => $birthDay
            ]);
        }
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
        //
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
        dd($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);
            $accountType = $user['accountType'];


            if ($accountType != 2) {
                return redirect("/");
            }

            if ($request->btnUpdateProfile) {
                $queryExistArr = json_decode(DB::table('accounts')->where('accountID', '=', $id)->get(), true);
                if (count($queryExistArr) > 0) {
                    $updateCount = DB::table('accounts')->where('accountID', '=', $id)->update([
                        'firstName' => $request->firstName,
                        'middleName' => $request->middleName,
                        'lastName' => $request->lastName,
                        'contactNumber' => $request->contactNumber,
                        'guardian' => $request->guardian,
                        'level' => $request->level,
                        'birthDate' => $request->year . '-' . $request->month . '-' . $request->day,
                    ]);
                    if ($updateCount > 0) {
                        session()->put('successUpdate', true);
                        $user = json_decode(DB::table('accounts')->where('accountID', '=', $id)->get(), true);
                        session()->put('users', $user[0]);
                    } else {
                        session()->put('errorUpdateProfile', true);
                    }
                } else {
                    session()->put('errorUpdateProfile', true);
                }
            }

            return redirect("/my_profile");
        }

        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
