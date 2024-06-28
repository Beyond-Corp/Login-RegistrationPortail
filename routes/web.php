<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login',[Authcontroller::class, 'login'])->name('login'); //Elle est utilisée pour afficher le formulaire de connexion aux utilisateurs.|| Lorsque quelqu'un accède à l'URL /login, la méthode login du AuthController est appelée, et elle retourne probablement une vue contenant le formulaire de connexion.
Route::post('/login',[Authcontroller::class, 'loginPost'])->name('login.post'); //  Elle est utilisée pour envoyer les informations saisies dans le formulaire de connexion au serveur pour vérification. Lorsque le formulaire de connexion est soumis, les données sont envoyées à cette route, et la méthode loginPost du AuthController est appelée pour traiter les informations et vérifier les identifiants.
Route::get('/registration',[Authcontroller::class, 'registration'])->name('registration');//Elle est utilisée pour afficher le formulaire d'inscription aux utilisateurs.Lorsque quelqu'un accède à l'URL /register, la méthode registration du AuthController est appelée, et elle retourne probablement une vue contenant le formulaire d'inscription.
Route::post('/registration',[Authcontroller::class, 'registrationPost'])->name('registration.post'); //Elle est utilisée pour envoyer les informations saisies dans le formulaire d'inscription au serveur pour création d'un nouveau compte utilisateur. Lorsque le formulaire d'inscription est soumis, les données sont envoyées à cette route, et la méthode registrationPost du AuthController est appelée pour traiter les informations et créer un nouvel utilisateur.
Route::get('/logout',[Authcontroller::class,'logout'])->name('logout');//Elle est utilisée pour permettre aux utilisateurs de se déconnecter de l'application. Lorsque l'utilisateur clique sur un bouton de déconnexion, une requête POST est envoyée à cette route, et la méthode logout du AuthController est appelée pour déconnecter l'utilisateur.
// Récapitulatif :
//     GET est utilisé pour afficher des formulaires ou des pages.
//     POST est utilisé pour envoyer des données (par exemple, depuis un formulaire) au serveur pour traitement.

Route::group(['middleware'=> 'auth'], function () {
    Route::get('/profile',function () {
        return ('Hi');
    });});