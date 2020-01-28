<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public  function index()
    {
        $users = [
            'joel',
            'juan'
        ];
        return view('users', [
            'users'=> $users
        ]);
    }

    public function show($id)
    {
        return "mostrando detalle del usuario: {$id}";
    }

    public function create()
    {
        return "crear usuario";
    }

}
