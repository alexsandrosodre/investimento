<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage()
    {
        
        $variavel = "homepage do sistema de investimento";

        return view('welcome', [
            'title' => $variavel
        ]);
    }
    public function cadastrar()
    {
         echo 'cadastrar'; 
    }
    public function fazerlogin()
    {
       echo ' seu login';
    }

    

}
