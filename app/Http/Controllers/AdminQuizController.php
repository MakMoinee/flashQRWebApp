<?php

namespace App\Http\Controllers;

use App\Models\FlashCard;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminQuizController extends Controller
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

            $flashCards = FlashCard::all();
            $quizzes = DB::table('vwquizzes')
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            $queryData = DB::table('account_photos')->where('accountID', '=', $user['accountID'])->get();
            $queryData = json_decode($queryData, true);
            $imgPhoto = count($queryData) > 0 ? $queryData[0]['imagePath'] : '/profile.png';




            return view("admin.quiz", [
                'flashCards' => $flashCards, 
                'quizzes' => $quizzes,
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
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);
            $accountType = $user['accountType'];

            if ($accountType != 1) {
                return redirect("/");
            }

            if ($request->btnCreateQuiz) {
                $newQuiz = new Quiz();
                $newQuiz->flashCardID = $request->flashCard;
                $newQuiz->question = $request->question;
                $newQuiz->keyAnswer = boolval($request->keyAnswer);
                $isSave = $newQuiz->save();
                if ($isSave) {
                    session()->put('successSaveQuiz', true);
                } else {
                    session()->put('errorSaveQuiz', true);
                }
            }

            return redirect("/quiz");
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

            if ($request->btnUpdateQuiz) {
                $data = json_decode(DB::table('quizzes')->where('quizID', '=', $id)->get(), true);
                if (count($data) > 0) {
                    $updateCount = DB::table('quizzes')->where('quizID', '=', $id)->update([
                        "question" => $request->question,
                        "keyAnswer" => filter_var($request->keyAnswer, FILTER_VALIDATE_BOOLEAN),
                        "flashCardID" => $request->flashCard
                    ]);
                    if ($updateCount > 0) {
                        session()->put("successUpdateQuiz", true);
                    } else {
                        session()->put("errorUpdateQuiz", true);
                    }
                } else {
                    session()->put("errorUpdateQuiz", true);
                }
            }

            return redirect("/quiz");
        }
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);
            $accountType = $user['accountType'];

            if ($accountType != 1) {
                return redirect("/");
            }

            if ($request->btnDeleteQuiz) {
                $data = json_decode(DB::table('quizzes')->where('quizID', '=', $id)->get(), true);
                if (count($data) > 0) {
                    $deleteCount = DB::table('quizzes')->where('quizID', '=', $id)->delete();
                    if ($deleteCount > 0) {
                        session()->put("successDeleteQuiz", true);
                    } else {
                        session()->put("errorDeleteQuiz", true);
                    }
                } else {
                    session()->put("errorDeleteQuiz", true);
                }
            }

            return redirect("/quiz");
        }
        return redirect("/");
    }
}
