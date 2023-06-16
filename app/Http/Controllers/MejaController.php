<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MejaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     return view('manajer./meja');
    // }
    public function manajer()
    {
        return view('manajer./meja');
    }

    public function kasir()
    {
        return view('kasir./meja');
    }

    public function administrator()
    {
        return view('administrator./meja');
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
