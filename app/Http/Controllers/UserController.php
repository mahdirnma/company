<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users=User::all();
        return $users;
    }

    public function store()
    {
        return User::create([
            'name'=>'ali',
            'email'=>'ali@gmail.com',
            'password'=>bcrypt('123')
        ]);
    }
    public function address()
    {
        $user=User::find(1);
        return $user->address;
    }

    public function createAddress()
    {
        $user=User::find(1);
        $status=$user->address()->create([
            'address'=>'lorem ipsum3',
            'city'=>'Texas',
        ]);
        if($status){
            return 'address created';
        }
    }

}
