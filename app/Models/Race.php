<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;

    protected $fillable = [
        'starting_point',
        'arrival_point',
        'starting_date_time',
        'arrival_date_time',
        'race-status',
    ] ; 

    protected $dates = [
        'starting_date_time',
        'arrival_date_time',
    ] ; 

    public function driver() {
        return $this->belongsTo(Driver::class) ; 
    }
}
