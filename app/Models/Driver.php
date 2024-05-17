<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'first_name',
        'phone',
        'sex',
        'availability'
    ] ; 

    public function races() {
        return $this->hasMany(Race::class) ; 
    }
}
