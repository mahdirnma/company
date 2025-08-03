<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Http\Requests\StoreOrganizationRequest;
use App\Http\Requests\UpdateOrganizationRequest;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizations = Organization::all();
        return $organizations;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function address()
    {
        $organization=Organization::find(1);
        return $organization->address;
    }

    public function createAddress()
    {
        $organization=Organization::find(1);
        $status=$organization->address()->create([
            'address'=>'lorem 1',
            'city'=>'florida',
        ]);
        if($status){
            return 'address created';
        }
    }
    public function phoneNumber()
    {
        $organization=Organization::find(1);
        return $organization->phoneNumber;
    }
    public function createPhoneNumber()
    {
        $organization=Organization::find(1);
        $status=$organization->phoneNumber()->create([
            'number'=>'09184977900',
        ]);
        if($status){
            return 'phoneNumber created';
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(/*StoreOrganizationRequest $request*/)
    {
        return Organization::create([
            'name' => 'organization 1',
            'description' => 'description 1',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Organization $organization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organization $organization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrganizationRequest $request, Organization $organization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $organization)
    {
        //
    }
}
