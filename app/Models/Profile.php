<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Post;
use App\Models\Group;


class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function post(){
        return $this->hasMany(Post::class);
    }

    public function group(){
        return $this->belongsToMany(Group::class);
    }
}