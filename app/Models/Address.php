<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable=[
        'address',
        'city',
        'addressable_type',
        'addressable_id',
    ];
    public function addressable(){
        return $this->morphTo();
    }
}
