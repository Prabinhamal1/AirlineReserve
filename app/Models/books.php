<?php

namespace App\Models;

use App\users;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(users::class);
    }
}
