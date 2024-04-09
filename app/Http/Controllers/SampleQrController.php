<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleQrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sampleqr');
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
        $data = $request->input('qr_data');

        // Process the scanned QR code data
        // For demonstration, we'll just return it as JSON
        return response()->json(['data' => $data]);
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
