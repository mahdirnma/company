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
    public function address()
    {
        $company=Compony::find(2);
        return $company->address;
    }

    public function createAddress()
    {
        $company=Compony::find(2);
        $status=$company->address()->create([
            'address'=>'lorem ipsum3',
            'city'=>'Texas',
        ]);
        if($status){
            return 'address created';
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(/*StoreComponyRequest $request*/)
    {
        return Compony::create([
            'name' => 'name 2',
            'description' => 'description 2',
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
