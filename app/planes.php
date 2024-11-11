<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class planes extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'airline_id', 'code', 'capacity']; // Specify fillable fields

    public function airlines(){
        return $this->belongsTo(airlines::class, 'airline_id');
    }
}
