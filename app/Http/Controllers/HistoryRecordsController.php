<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoryRecordsController extends Controller
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

            $data = json_decode(DB::table('vwhistoryrecords')->where('accountID', '=', $user['accountID'])->get(), true);

            $queryData = DB::table('account_photos')->where('accountID', '=', $user['accountID'])->get();
            $queryData = json_decode($queryData, true);
            $imgPhoto = count($queryData) > 0 ? $queryData[0]['imagePath'] : '/profile.png';


            return view('student.history', [
                'history' => $data,
                'profilePhoto' => $imgPhoto
            ]);
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
