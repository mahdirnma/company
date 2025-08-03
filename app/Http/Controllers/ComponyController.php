<?php

namespace App\Http\Controllers;

use App\Models\Compony;
use App\Http\Requests\StoreComponyRequest;
use App\Http\Requests\UpdateComponyRequest;

class ComponyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $componies = Compony::all();
        return $componies;
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
    public function store(/*StoreComponyRequest $request*/)
    {
        return Compony::create([
            'name' => 'name 1',
            'description' => 'description 1',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Compony $compony)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Compony $compony)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComponyRequest $request, Compony $compony)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Compony $compony)
    {
        //
    }
}
