<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index(){
        $user = User::paginate(10);
        return view('admin.user.list-user',['user' => $user]);
    }
}
