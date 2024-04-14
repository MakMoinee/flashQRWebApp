<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentQuizController extends Controller
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


            if ($accountType != 2) {
                return redirect("/");
            }

            $id = $request->query('qid');
            if ($id) {

                $queryData = json_decode(DB::table('quizzes')->get(), true);
                $flashID = 0;
                foreach ($queryData as $q) {
                    if (password_verify($q['flashCardID'], $id)) {
                        $flashID = $q['flashCardID'];
                        break;
                    }
                }


                $queryData = json_decode(DB::table('quizzes')->where('flashCardID', '=', $flashID)->get(), true);
                $quizArr = array();
                if (count($queryData) > 0) {
                    shuffle($queryData);
                    $count = 0;

                    foreach ($queryData as $q) {
                        $count++;
                        $q['sequence'] = $count;
                        array_push($quizArr, $q);
                    }
                    session()->put("successRetrieveQuiz", true);
                } else {
                    session()->put("errorRetrieveQuiz", true);
                }

                return view('student.quiz', ['quiz' => $quizArr, 'count' => count($quizArr)]);
            }
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
