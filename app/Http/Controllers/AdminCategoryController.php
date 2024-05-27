<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AdminCategoryController extends Controller
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

            $data = DB::table('vwcategories')
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            $queryData = DB::table('account_photos')->where('accountID', '=', $user['accountID'])->get();
            $queryData = json_decode($queryData, true);
            $imgPhoto = count($queryData) > 0 ? $queryData[0]['imagePath'] : '/profile.png';



            return view("admin.category", [
                'categories' => $data,
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
            $accountID = $user['accountID'];
            $fullName = $user['lastName'] . "," . $user['firstName'] . " " . $user['middleName'];

            if ($accountType != 1) {
                return redirect("/");
            }

            if ($request->btnCreateCategory) {
                $query = DB::table('categories')->where('categoryName', '=', $request->categoryName)->get();
                $data = json_decode($query, true);
                if (count($data) > 0) {
                    session()->put("errorCategoryExist", true);
                } else {
                    $files = $request->file("imagePath");
                    $fileName = "";

                    if ($files) {
                        $mimeType = $files->getMimeType();
                        if ($mimeType == "image/png" || $mimeType == "image/jpg" || $mimeType == "image/JPG" || $mimeType == "image/JPEG" || $mimeType == "image/jpeg" || $mimeType == "image/PNG") {
                            $destinationPath = $_SERVER['DOCUMENT_ROOT'] . "/public" . '/data/categories';
                            $fileName = strtotime(now()) . "." . $files->getClientOriginalExtension();
                            $isFile = $files->move($destinationPath,  $fileName);
                            chmod($destinationPath, 0755);

                            if ($fileName != "") {
                                $fileName = "/data/categories/" . $fileName;
                                $category = new Category();
                                $category->imagePath = $fileName;
                                $category->accountID = $accountID;
                                $category->createdBy = $fullName;
                                $category->categoryName = $request->categoryName;
                                $isSave = $category->save();
                                if ($isSave) {
                                    session()->put("successAddCategory", true);
                                } else {
                                    session()->put("errorAddCategory", true);
                                }
                            } else {
                                session()->put("errorAddCategory", true);
                            }
                        } else {
                            session()->put("errorMimeTypeInvalid", true);
                        }
                    } else {
                        $category = new Category();
                        $category->imagePath = '';
                        $category->createdBy = $fullName;
                        $category->accountID = $accountID;
                        $category->categoryName = $request->categoryName;
                        $isSave = $category->save();
                        if ($isSave) {
                            session()->put("successAddCategory", true);
                        } else {
                            session()->put("errorAddCategory", true);
                        }
                    }
                }
            }

            return redirect('/category');
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

            if ($request->btnUpdateCategory) {
                $origCategoryName = $request->updateOrigCategoryName;
                $updateCategoryName = $request->updateCategoryName;
                if ($origCategoryName == $updateCategoryName) {

                    $files = $request->file("updateImagePath");
                    $fileName = "";

                    if ($files) {
                        $mimeType = $files->getMimeType();
                        if ($mimeType == "image/png" || $mimeType == "image/jpg" || $mimeType == "image/JPG" || $mimeType == "image/JPEG" || $mimeType == "image/jpeg" || $mimeType == "image/PNG") {
                            $destinationPath = $_SERVER['DOCUMENT_ROOT'] . "/public" . '/data/categories';
                            $fileName = strtotime(now()) . "." . $files->getClientOriginalExtension();
                            $isFile = $files->move($destinationPath,  $fileName);
                            chmod($destinationPath, 0755);

                            if ($fileName != "") {
                                try {
                                    $originalDirectoryPath = $request->updateOrigImagePath;
                                    if ($originalDirectoryPath) {
                                        $destinationPath2 = $_SERVER['DOCUMENT_ROOT'] . "/public" . $originalDirectoryPath;
                                        File::delete($destinationPath2);
                                    }
                                } catch (Exception $e1) {
                                }

                                $updateCount = DB::table('categories')->where('categoryID', '=', $id)->update([
                                    'categoryName' => $request->updateCategoryName,
                                    'imagePath' => '/data/categories/' . $fileName,
                                ]);
                                if ($updateCount > 0) {
                                    session()->put('successUpdateCategory', true);
                                } else {
                                    session()->put('errorUpdateCategory', true);
                                }
                            }
                        }
                    } else {
                        $updateCount = DB::table('categories')->where('categoryID', '=', $id)->update([
                            'categoryName' => $request->updateCategoryName,
                        ]);

                        if ($updateCount > 0) {
                            session()->put('successUpdateCategory', true);
                        } else {
                            session()->put('errorUpdateCategory', true);
                        }
                    }
                } else {
                    $data = json_decode(DB::table('categories')->where('categoryName', '=', $request->updateCategoryName)->get(), true);
                    if (count($data) > 0) {
                        session()->put('categoryNameExist', true);
                    } else {

                        $files = $request->file("updateImagePath");
                        $fileName = "";

                        if ($files) {
                            $mimeType = $files->getMimeType();
                            if ($mimeType == "image/png" || $mimeType == "image/jpg" || $mimeType == "image/JPG" || $mimeType == "image/JPEG" || $mimeType == "image/jpeg" || $mimeType == "image/PNG") {
                                $destinationPath = $_SERVER['DOCUMENT_ROOT'] . "/public" . '/data/categories';
                                $fileName = strtotime(now()) . "." . $files->getClientOriginalExtension();
                                $isFile = $files->move($destinationPath,  $fileName);
                                chmod($destinationPath, 0755);

                                if ($fileName != "") {
                                    try {
                                        $originalDirectoryPath = $request->updateOrigImagePath;
                                        if ($originalDirectoryPath) {
                                            $destinationPath2 = $_SERVER['DOCUMENT_ROOT'] . "/public" . $originalDirectoryPath;
                                            File::delete($destinationPath2);
                                        }
                                    } catch (Exception $e1) {
                                    }

                                    $updateCount = DB::table('categories')->where('categoryID', '=', $id)->update([
                                        'categoryName' => $request->updateCategoryName,
                                        'imagePath' => '/data/categories/' . $fileName,
                                    ]);
                                    if ($updateCount > 0) {
                                        session()->put('successUpdateCategory', true);
                                    } else {
                                        session()->put('errorUpdateCategory', true);
                                    }
                                }
                            }
                        } else {
                            $updateCount = DB::table('categories')->where('categoryID', '=', $id)->update([
                                'categoryName' => $request->updateCategoryName,
                            ]);

                            if ($updateCount > 0) {
                                session()->put('successUpdateCategory', true);
                            } else {
                                session()->put('errorUpdateCategory', true);
                            }
                        }
                    }
                }
            }


            return redirect("/category");
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

            if ($request->btnDeleteCategory) {
                try {
                    $originalDirectoryPath = $request->imagePath;
                    if ($originalDirectoryPath) {
                        $destinationPath = $_SERVER['DOCUMENT_ROOT'] . "/public" . $originalDirectoryPath;
                        File::delete($destinationPath);
                    }
                } catch (Exception $e1) {
                }
                $count = DB::table('categories')->where('categoryID', '=', $id)->delete();

                if ($count > 0) {
                    session()->put("successDeleteCategory", true);
                } else {
                    session()->put("errorDeleteCategory", true);
                }
            }



            return redirect('/category');
        }
        return redirect("/");
    }
}
