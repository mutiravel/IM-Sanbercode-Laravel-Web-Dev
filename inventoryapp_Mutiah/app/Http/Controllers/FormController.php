<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function Register (){
        return view('form');
    }

    public function FormSubmit (Request $request){
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $gender = $request->input('gender');
        $nationality = $request->input('nationality');
        $language = $request->input('language');
        $bio = $request->input('bio');
        return view('welcome', ['firstName' => $firstName, 'lastName' => $lastName, 'gender' => $gender, 'nationality' => $nationality, 'language' => $language, 'bio' => $bio]);
    }
}
