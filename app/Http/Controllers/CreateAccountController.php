<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $currentYear = date('Y');
        $years = range(1990, $currentYear);
        return view('create_account', ['yrs' => $years]);
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
        if ($request->btnCreateAccount) {
            $studentNumber = $request->studentNumber;
            $password = $request->password;
            $accountType = $request->accountType;
            $confirmPass = $request->confirmPass;
            $lastName = $request->lastName;
            $firstName = $request->firstName;
            $middleName = $request->middleName;
            $level = $request->level;
            $day = $request->day;
            $month = $request->month;
            $year = $request->year;
            $date = new DateTime("$year-$month-$day");
            $formattedDate = $date->format('Y-m-d');
            $guardian = $request->guardian;
            $contactNumber = $request->contactNumber;

            if ($password != $confirmPass) {
                session()->put("passwordNotMatch", true);
                return redirect("/create");
            }
            $data = array();
            $queryResult = DB::table('accounts')->where('studentNumber', '=', $studentNumber)->get();
            $data = json_decode($queryResult, true);
            if (count($data)> 0) {
                session()->put('accountExist', true);
            } else {
                $newAccount = new Accounts();
                $newAccount->studentNumber = $studentNumber;
                $newAccount->accountType = $accountType;
                $newAccount->password = Hash::make($password);
                $newAccount->lastName = $lastName;
                $newAccount->firstName = $firstName;
                $newAccount->middleName = $middleName;
                $newAccount->level = $level;
                $newAccount->guardian = $guardian;
                $newAccount->birthDate = $formattedDate;
                $newAccount->contactNumber = $contactNumber;
                $isSave = $newAccount->save();
                if ($isSave) {
                    session()->put("successCreate", true);
                } else {
                    session()->put("errorCreate", true);
                }
            }
        }
        return redirect("/create");
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
