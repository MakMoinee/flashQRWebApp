<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserRecordsController extends Controller
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

            $users = DB::table('vwusers')
                ->where('accountID', '=', $user['accountID'])
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            $results = DB::table('vwresults')->where('accountID', '=', $user['accountID'])->get();
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

            $queryData = DB::table('account_photos')->where('accountID', '=', $user['accountID'])->get();
            $queryData = json_decode($queryData, true);
            $imgPhoto = count($queryData) > 0 ? $queryData[0]['imagePath'] : '/profile.png';


            return view('student.records', [
                'users' => $users,
                'profilePhoto' => $imgPhoto, 'approver' => $data, 'results' => $arrResult, 'userID' => $user['accountID']
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
