<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserScanQRController extends Controller
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

            return view('student.scan');
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


            if ($accountType != 2) {
                return redirect("/");
            }

            if ($request->btnScan) {
                $splitText = explode('-', $request->qrCode);
                if (count($splitText) > 0) {
                    $hashID = $splitText[0];
                    if ($hashID) {
                        return redirect("/student_quiz?qid=" . $hashID . "");
                    } else {
                        session()->put('errorQrCode', true);
                    }
                } else {
                    session()->put('errorQrCode', true);
                }
            }

            return redirect("/user_scanqr");
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
