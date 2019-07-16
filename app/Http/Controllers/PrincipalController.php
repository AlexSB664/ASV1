<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class PrincipalController extends Controller
{
    public function index(){
    	return view('login');
    }
    public function pruebaE(){
    	$encrypted = Crypt::encryptString('Hello world.');
    	$decrypted = Crypt::decryptString($encrypted);
    	return $encrypted.$decrypted;
    }

    public function registro(){
    	return view('registro');
    }
    
}
