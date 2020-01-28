<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public  function index()
    {
        return 'Users';
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
