<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PhpParser\Node\Stmt\Return_;

class RoomImage extends Model
{
    use HasFactory, SoftDeletes;
     protected $fillable = [
        'room_id', 
        'image',
    ] ;

    public function room(){
        return $this->belongsTo(Room::class);
    }
}
