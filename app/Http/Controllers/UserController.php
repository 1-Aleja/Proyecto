<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function index(Request $request)//listarusuarios
    {
        $userlist=User::paginate(10);
        $user = Role::all();
        return view('user.listuser', compact('userlist', 'user'));
    }
    public function deleteuser(Request $request)
    {
        
    }
    public function register(Request $request)//vista registrar
    {
        $create= Role::all();
        return view('user.createuser', compact('create'));
    }
    public function registeruser(Request $request)//regitrar usuariios
    {
        dd($request);
        return view('user.createuser');
    }
    public function edituser(Request $request) //editarusuarios
    {
        $create= Role::all();
        return view('user.edituser', compact('create'));
        
    }

}
