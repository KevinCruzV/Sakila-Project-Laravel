<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'address';
    protected $primaryKey = 'address_id';
    public $timestamps = false;

    public function customer()
    {
        return $this->hasOne(Customer::class, 'customer_id', 'customer_id');
    }
}
