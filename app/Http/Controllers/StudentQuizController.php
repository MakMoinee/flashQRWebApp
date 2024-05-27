<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\UserHistory;
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


                //check if user already answered the quiz
                $queryData = json_decode(DB::table('answers')->where('flashCardID', '=', $flashID)->where('accountID', '=', $user['accountID'])->get(), true);
                $quizArr = array();
                $flashCardName = "";
                $categoryName = "";
                $description = "";
                $imagePath = "";
                if (count($queryData) > 0) {
                    session()->put("errorExistAnswer", true);
                    return redirect("/");
                }

                $queryData = json_decode(DB::table('vwquizzes')->where('flashCardID', '=', $flashID)->get(), true);

                if (count($queryData) > 0) {
                    shuffle($queryData);
                    $count = 0;

                    foreach ($queryData as $q) {
                        $count++;
                        $q['sequence'] = $count;
                        $flashCardName = $q['flashCardName'];
                        $categoryName = $q['categoryName'];
                        $description = $q['description'];
                        $imagePath = $q['imagePath'];
                        array_push($quizArr, $q);
                    }
                    session()->put("successRetrieveQuiz", true);
                } else {
                    session()->put("errorRetrieveQuiz", true);
                }

                $queryData = DB::table('account_photos')->where('accountID', '=', $user['accountID'])->get();
                $queryData = json_decode($queryData, true);
                $imgPhoto = count($queryData) > 0 ? $queryData[0]['imagePath'] : '/profile.png';


                return view('student.quiz', [
                    'quiz' => $quizArr,
                    'count' => count($quizArr),
                    'flashCardName' => $flashCardName,
                    'categoryName' => $categoryName,
                    'description' => $description,
                    'imagePath' => $imagePath,
                    'profilePhoto' => $imgPhoto,
                    'mFlashID' => $flashID
                ]);
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

        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);
            $accountType = $user['accountType'];


            if ($accountType != 2) {
                return redirect("/");
            }

            if ($request->btnCompleteQuiz) {
                $list = explode(",", $request->list);
                $answer = explode(",", $request->answer);
                $cards = explode(",", $request->cards);

                if (count($list) > 0) {
                    if (count($answer) > 0) {
                        $index = 0;
                        $saveCount = 0;
                        foreach ($list as $q) {
                            $newAnswer = new Answers();
                            $newAnswer->accountID = $user['accountID'];
                            $newAnswer->quizID = $q;
                            $newAnswer->answer = boolval($answer[$index]);
                            $newAnswer->flashCardID = $request->mFlashID;
                            $isSave = $newAnswer->save();
                            if ($isSave) {
                                $saveCount++;
                            }
                            $index++;
                        }

                        if ($index == $saveCount) {
                            $userHistory = new UserHistory();
                            $userHistory->accountID = $user['accountID'];
                            $userHistory->action = "Taken Quiz";
                            $userHistory->description = $request->description;
                            $userHistory->save();

                            session()->put("successQuiz", true);
                        } else {
                            dd([$index, $saveCount]);
                            foreach ($list as $q) {
                                DB::table('answers')->where('quizID', '=', $q)->delete();
                            }

                            session()->put("errorQuiz", true);
                        }
                    }
                }
            }
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
