<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
    protected $fillable=[
        'number',
        'phoneNumberable_id',
        'phoneNumberable_type',
    ];
    public function phoneNumberable(){
        return $this->morphTo();
    }
}
