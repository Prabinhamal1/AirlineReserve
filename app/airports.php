<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class airports extends Model
{
    
    use HasFactory;
    protected $table = 'airports';
    public function location(){
        return $this->belongsTo(Cities::class, 'city_id');
    }


}
