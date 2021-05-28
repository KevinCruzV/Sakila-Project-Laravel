<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    protected $table = 'actor';
    protected $primaryKey = 'actor_id';
    public $timestamps = false;

    // Deux colonnes habituelles dans les tables :
    // created_at : Créé à telle date
    // updated_at : Modifiée à telle date
    // Dans sakila, elles ne sont pas présentes
    // donc on met timestamps à false

    public function films() {
        return $this->belongsToMany(Film::class, 'film_actor', 'actor_id', 'film_id', 'actor_id', 'film_id');
    }
}
