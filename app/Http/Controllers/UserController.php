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
}
