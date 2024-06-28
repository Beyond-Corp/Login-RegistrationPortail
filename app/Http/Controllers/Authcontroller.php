<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class Authcontroller extends Controller
{
    function login(){

        if(Auth::check()){
            return redirect(route('home'))->with('','');   
        } 
        return view("login");
    }


    function registration(){
        if(Auth::check()){
            return redirect(route('home'))->with('','');   
        } 
        return view("registration");
    }


    function loginPost(Request $request)
    {
        // Validation des champs email et password
        $request->validate([
            "email" => "required",
            "password" => "required",
        ]);
    
        // Récupération des informations d'identification depuis la requête
        $credentials = $request->only("email", "password");
    
        // Tentative d'authentification
        if (Auth::attempt($credentials)) {
            // Authentification réussie, redirection vers la page d'accueil
            return redirect()->intended(route('home'));
        } else {
            // Échec de l'authentification
            return redirect(route('login'))->with('error', "Échec de l'authentification");
        }
    }    

function registrationPost(Request $request){
    $request->validate([
        "name"=> "required",
        "email"=> "required|email|unique:users",
        "password"=> "required",

    ]);

    $data['name'] = $request->name;
    $data['email'] = $request->email;
    $data['password'] = Hash::make ( $request->password);
    $user= User::create($data);

    if (!$user){
        return redirect(route('registration'))->with('error','registrations fail try again') ;
    }
    return redirect(route('login'))->with('success','Welcome back ') ;

}

function logout(){
    Session::flush();
    Auth::logout();

    return redirect(route('login'))->with('success','') ;

}


}


