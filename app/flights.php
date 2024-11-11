<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Cities;


class flights extends Model
{
    // Specify the table if it doesn't follow Laravel's naming conventions
    protected $table = 'flights'; 
    public function origin() {
        
        return $this->belongsTo(airports::class, 'origin_id'); // Specify the foreign key
    }

    public function destination() {
        return $this->belongsTo(airports::class, 'destination_id'); // Specify the foreign key
    }
    public function airlines(){
        return $this->belongsTo(airlines::class, 'airline_id');
    }

    use HasFactory;
}
