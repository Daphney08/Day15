<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    protected $request;
    public function __construct($Request $request)
    
   {

        $this->request=$request;
   }

   public function login()
   {

   }

   public  function registration()
    {

    }

    public function login_verify()
    {

    }

    public function registration_verify()
    {
        
    }
   
}
