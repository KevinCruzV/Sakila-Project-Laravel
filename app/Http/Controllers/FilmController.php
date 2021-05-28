<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use \PDO;
use Illuminate\Support\Facades\DB;


class FilmController extends Controller
{
    public function films() {

        $films = DB::table('film')->paginate(30);
        return view('films', [
            "films" => $films
        ]);    
    }


    public function voirFilm($id) {

        $film = Film::find($id);

        var_dump($film);

    }



    public function voirFilm2(Request $request) {

        $id = $request->query('id');

        $film = Film::find($id);

        var_dump($film);

        return view('nomdelavue', [

            "film" => $film

        ]);

    }
}    