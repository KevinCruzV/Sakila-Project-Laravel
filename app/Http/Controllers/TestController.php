<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // GET
    public function form() {
        return view('test/form');
    }

    // POST
    public function process(Request $request) {
        if($request->has(['prenom', 'nom', 'age'])) {
            // Là y'a pas de souci
            return view('test.process', [
                "prenom" => $request->input('prenom'),
                "nom" => $request->input('nom'),
                "age" => $request->input('age'),
            ]);
        } else {
            // Afficher un message d'erreur
        }
        // Récupérer les données du formulaire
        // et les traiter
    }
}
