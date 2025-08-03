<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compony extends Model
{
    protected $fillable=[
        'name',
        'description',
    ];

    public function address()
    {
        return $this->morphOne(Address::class,'addressable');
    }
    public function phoneNumber()
    {
        return $this->morphOne(PhoneNumber::class,'phoneNumberable');
    }
}
