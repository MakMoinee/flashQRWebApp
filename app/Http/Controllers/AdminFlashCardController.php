<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\FlashCard;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AdminFlashCardController extends Controller
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

          
            $categories = Category::all();
            $flashCards = DB::table('vwflashcards')
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            return view('admin.flashcard', ['yrs' => $years, 'currentUser' => $user, 'categories' => $categories, 'flashCards' => $flashCards]);
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
            $accountID = $user['accountID'];
            $fullName = $user['lastName'] . "," . $user['firstName'] . " " . $user['middleName'];


            if ($accountType != 1) {
                return redirect("/");
            }

            if ($request->btnCreateFlashCard) {
                $data = json_decode(DB::table('flash_cards')->where('flashCardName', '=', $request->flashCardName)->where('categoryID', '=', $request->category)->get(), true);
                if (count($data) > 0) {
                    session()->put("errorExist", true);
                } else {
                    $files = $request->file('imagePath');
                    $fileName = "";
                    $newFlashCard = new FlashCard();
                    $newFlashCard->flashCardName = $request->flashCardName;
                    $newFlashCard->categoryID = $request->category;
                    $newFlashCard->description = $request->description;
                    $newFlashCard->accountID = $accountID;
                    $newFlashCard->createdBy = $fullName;
                    if ($files) {
                        $mimeType = $files->getMimeType();
                        if ($mimeType == "image/png" || $mimeType == "image/jpg" || $mimeType == "image/JPG" || $mimeType == "image/JPEG" || $mimeType == "image/jpeg" || $mimeType == "image/PNG") {
                            $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/data/flashcards';
                            $fileName = strtotime(now()) . "." . $files->getClientOriginalExtension();
                            $isFile = $files->move($destinationPath,  $fileName);
                            chmod($destinationPath, 0755);

                            if ($fileName != "") {
                                $fileName = "/data/flashcards/" . $fileName;
                                $newFlashCard->imagePath = $fileName;
                                $isSave = $newFlashCard->save();
                                if ($isSave) {
                                    session()->put("successAddFlashCard", true);
                                } else {
                                    session()->put("errorAddFlashCard", true);
                                }
                            }
                        } else {
                            session()->put("errorMimeType", true);
                        }
                    } else {
                        $isSave = $newFlashCard->save();
                        if ($isSave) {
                            session()->put("successAddFlashCard", true);
                        } else {
                            session()->put("errorAddFlashCard", true);
                        }
                    }
                }
            }
            return redirect("/flashcard");
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

            if ($request->btnUpdateFlashCard) {
                $data = json_decode(DB::table('flash_cards')->where('flashCardName', '=', $request->updateFlashCardName)->where('categoryID', '=', $request->updateCategory)->where('flashCardID', '<>', $id)->get(), true);
                if (count($data) > 0) {
                    session()->put("errorFlashCardExist", true);
                } else {
                    $files = $request->file('updateImagePath');
                    $fileName = "";

                    if ($files) {
                        try {
                            $originalDirectoryPath = $request->origImagePath;
                            if ($originalDirectoryPath) {
                                $destinationPath = $_SERVER['DOCUMENT_ROOT'] . $originalDirectoryPath;
                                File::delete($destinationPath);
                            }
                        } catch (Exception $e1) {
                        }

                        $mimeType = $files->getMimeType();
                        if ($mimeType == "image/png" || $mimeType == "image/jpg" || $mimeType == "image/JPG" || $mimeType == "image/JPEG" || $mimeType == "image/jpeg" || $mimeType == "image/PNG") {
                            $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/data/flashcards';
                            $fileName = strtotime(now()) . "." . $files->getClientOriginalExtension();
                            $isFile = $files->move($destinationPath,  $fileName);
                            chmod($destinationPath, 0755);

                            if ($fileName != "") {
                                $fileName = "/data/flashcards/" . $fileName;

                                $updateCount = DB::table('flash_cards')->where('flashCardID', '=', $id)->update([
                                    'flashCardName' => $request->updateFlashCardName,
                                    'categoryID' => $request->updateCategory,
                                    'description' => $request->description,
                                    'imagePath' => $fileName
                                ]);

                                if ($updateCount > 0) {
                                    session()->put("successUpdateFlashCard", true);
                                } else {
                                    session()->put("errorUpdateFlashCard", true);
                                }
                            }
                        }
                    } else {
                        $updateCount = DB::table('flash_cards')->where('flashCardID', '=', $id)->update([
                            'flashCardName' => $request->updateFlashCardName,
                            'categoryID' => $request->updateCategory,
                            'description' => $request->description
                        ]);

                        if ($updateCount > 0) {
                            session()->put("successUpdateFlashCard", true);
                        } else {
                            session()->put("errorUpdateFlashCard", true);
                        }
                    }
                }
            }

            return redirect("/flashcard");
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

            if ($request->btnDeleteFlashCard) {
                $data = json_decode(DB::table('flash_cards')->where('flashCardID', '=', $id)->get(), true);
                if (count($data) > 0) {
                    try {
                        $originalDirectoryPath = $request->imagePath;
                        if ($originalDirectoryPath) {
                            $destinationPath = $_SERVER['DOCUMENT_ROOT'] . $originalDirectoryPath;
                            File::delete($destinationPath);
                        }
                    } catch (Exception $e1) {
                    }

                    $deleteCount = DB::table('flash_cards')->where('flashCardID', '=', $id)->delete();
                    if ($deleteCount > 0) {
                        session()->put("successDeleteFlashCard", true);
                    } else {
                        session()->put("errorDeleteFlashCard", true);
                    }
                }
            }

            return redirect("/flashcard");
        }
        return redirect("/");
    }
}
