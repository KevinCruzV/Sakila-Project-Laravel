<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = 'inventory';
    protected $primaryKey = 'inventory_id';
    public $timestamps = false;

    public function film()
    {
        return $this->belongsTo(Film::class);
    }
}
