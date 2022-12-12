<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;

class Group extends Model
{
    use HasFactory;

    protected $table = 'groups';

    public function profile(){
        return $this->belongsToMany(Profile::class);
    }

    

}
