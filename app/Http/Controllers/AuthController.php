<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\User;

use Redirect, Storage;

class AuthController extends Controller
{

    protected $request;

    public function __construct(Request $request)
    
   {

        $this->request= $request;
   }

   public function index()
   {
        return view('index');
   }


   public function login()
   {
        return view('login');
   }


   public  function registration()
    {
        return view('registration');
    }


    public function login_verify()
    {
       
    }

    public function registration_verify()
    {
        /**
         * 1.upload image in the storage
         * 2. save data on database
         * 3.redirect user to login
         */

         //upoad
         //putFile('folder_name', fileobject)
         $filename = Storage::disk('public')->putFile('avatar', $this->request->file);

         dd($filename);
        
    }
   
}
