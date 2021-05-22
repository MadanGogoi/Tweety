<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\User;

class ProfileController extends Controller
{

    public function show(User $user){
        
        return view('profiles.show',compact('user'));
    }

}
