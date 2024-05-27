<?php

namespace App\Http\Controllers;

use App\Models\AccountPhoto;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminPersonalDetailsController extends Controller
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

            $currentYear = date('Y');
            $years = range(1990, $currentYear);


            $monthText = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

            $birthMonth =  (new DateTime($user['birthDate']))->setTimezone(new DateTimeZone('Asia/Manila'))->format('m');
            $birthYear =  (new DateTime($user['birthDate']))->setTimezone(new DateTimeZone('Asia/Manila'))->format('Y');
            $birthDay =  (new DateTime($user['birthDate']))->setTimezone(new DateTimeZone('Asia/Manila'))->format('d');



            $queryData = DB::table('account_photos')->where('accountID', '=', $user['accountID'])->get();
            $queryData = json_decode($queryData, true);
            $imgPhoto = count($queryData) > 0 ? $queryData[0]['imagePath'] : '/profile.png';



            return view('admin.profiles', [
                'yrs' => $years,
                'currentUser' => $user,
                'profilePhoto' => $imgPhoto,
                'months' => 12,
                'monthText' => $monthText,
                'birthMonth' => $birthMonth,
                'birthYear' => $birthYear,
                'birthDay' => $birthDay,
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
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);
            $accountType = $user['accountType'];


            if ($accountType != 1) {
                return redirect("/");
            }

            if ($request->btnUpdateProfilePhoto) {
                $files = $request->file('imgFile');
                $fileName = "";
                if ($files) {
                    $mimeType = $files->getMimeType();
                    if ($mimeType == "image/png" || $mimeType == "image/jpg" || $mimeType == "image/JPG" || $mimeType == "image/JPEG" || $mimeType == "image/jpeg" || $mimeType == "image/PNG") {
                        $destinationPath = $_SERVER['DOCUMENT_ROOT'] . "/public/" . '/data/profiles';
                        $fileName = strtotime(now()) . "." . $files->getClientOriginalExtension();
                        $isFile = $files->move($destinationPath,  $fileName);
                        chmod($destinationPath, 0755);

                        if ($fileName) {
                            $query = DB::table('account_photos')->where('accountID', '=', $user['accountID'])->get();
                            $data = json_decode($query, true);
                            if (count($data) > 0) {
                                $photoID = $data[0]['photoID'];
                                $updateCount = DB::table('account_photos')->where('photoID', '=', $photoID)->update([
                                    'imagePath' => '/data/profiles/' . $fileName
                                ]);
                                if ($updateCount > 0) {
                                    session()->put("successAddPhoto", true);
                                } else {
                                    session()->put("errorAddPhoto", true);
                                }
                            } else {
                                $newPhoto = new AccountPhoto();
                                $newPhoto->accountID = $user['accountID'];
                                $newPhoto->imagePath = '/data/profiles/' . $fileName;
                                $isSave = $newPhoto->save();
                                if ($isSave) {
                                    session()->put("successAddPhoto", true);
                                } else {
                                    session()->put("errorAddPhoto", true);
                                }
                            }
                        }
                    } else {
                        session()->put("invalidMimeType", true);
                    }
                }
            }
            return redirect("/profiles");
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
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);
            $accountType = $user['accountType'];


            if ($accountType != 1) {
                return redirect("/");
            }

            if ($request->btnUpdateProfileAdmin) {
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

            return redirect("/profiles");
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
