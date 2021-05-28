<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;
use Illuminate\Support\Facades\DB;

class ActorController extends Controller
{

    // public function acteurs()
    // {
    //     $actors = Actor::all(['actor_id', 'first_name', 'last_name']);
    // }



    public function acteurs() {
        // ORM : Object Relational Mapping
        // Relier (Mapping) des objets ($actors) à notre code
        // En gros : Ca fait les requêtes SQL à notre place
        
        // Pour ne récupérer que quelques colonnes
        // $actors = Actor::all(['actor_id', 'first_name', 'last_name']);
    
        //$search = $request->input('search');
        //$actors = Actor::where('first_name', $search)
        //               ->get();
        
        $actors = DB::table('actor')->paginate(30);
        return view('acteurs', [
            "actors" => $actors
        ]);
    }
}
