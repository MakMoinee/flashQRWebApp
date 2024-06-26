<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\UserApprovedLog;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminAccountActivationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);
            $accountType = $user['accountType'];

            $search = $request->query("search");

            if ($accountType != 1) {
                return redirect("/");
            }
            if ($search != "") {
                $paginatedAccounts = DB::table('accounts')
                    ->where('lastName', 'LIKE', '%' . $search . '%')
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);
            } else {
                $paginatedAccounts = DB::table('accounts')
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);
            }

            $mUsers = Accounts::all();
            $mUsers = json_decode($mUsers, true);
            $inActiveCount = 0;
            $activeCount = 0;
            foreach ($mUsers as $u) {
                if ($u['isActivated']) {
                    $activeCount += 1;
                } else {
                    $inActiveCount += 1;
                }
            }

            $queryData = DB::table('account_photos')->where('accountID', '=', $user['accountID'])->get();
            $queryData = json_decode($queryData, true);
            $imgPhoto = count($queryData) > 0 ? $queryData[0]['imagePath'] : '/profile.png';


            return view('admin.activation', [
                'searchKey' => $search,
                'profilePhoto' => $imgPhoto,
                'users' => $paginatedAccounts,
                'activeCount' => $activeCount,
                'inactiveCount' => $inActiveCount,
                'total' => $activeCount + $inActiveCount
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
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);
            $accountType = $user['accountType'];
            $accountID = $user['accountID'];


            if ($accountType != 1) {
                return redirect("/");
            }

            if ($request->btnActivateUser) {
                $isUpdate = DB::table('accounts')->where('accountID', '=', $id)->update([
                    'isActivated' => 1
                ]);
                if ($isUpdate > 0) {
                    session()->put("successActivate", true);
                    $newLog = new UserApprovedLog();
                    $newLog->accountID = $id;
                    $newLog->approver = $accountID;
                    $newLog->isActivated = true;
                    $newLog->save();
                } else {
                    session()->put("errorActivate", true);
                }
                return redirect("/activations");
            } else if ($request->btnDeactivateUser) {
                $isUpdate = DB::table('accounts')->where('accountID', '=', $id)->update([
                    'isActivated' => 0
                ]);
                if ($isUpdate > 0) {
                    session()->put("successDeactivate", true);
                    session()->put("successActivate", true);
                    $newLog = new UserApprovedLog();
                    $newLog->accountID = $id;
                    $newLog->approver = $accountID;
                    $newLog->isActivated = false;
                    $newLog->save();
                } else {
                    session()->put("errorDeactivate", true);
                }
                return redirect("/activations");
            }
        } else {
            return redirect("/");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
