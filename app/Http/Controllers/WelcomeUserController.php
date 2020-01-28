<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function __invoke($id, $nickname = null)
    {
        if($nickname){
            return " el usuario {$id} le dicen {$nickname}";
        }else{
            return "el usuario {$id}";
        }
    }
}
