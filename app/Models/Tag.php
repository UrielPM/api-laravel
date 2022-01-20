<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\traits\ApiTrait;
class Tag extends Model
{
    use HasFactory, ApiTrait;

     //Relacion muchos a muchoa
     public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
