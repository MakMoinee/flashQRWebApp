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
            $quizzes = json_decode(DB::table('vwquizzes')->get(), true);


            return view("admin.quiz", ['flashCards' => $flashCards, 'quizzes' => $quizzes]);
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
