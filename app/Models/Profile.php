<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
// i have created relation method with user model which was primary and this model is secondary
    public function user(){
        return $this->belongsTo(User::class);
    }
}
