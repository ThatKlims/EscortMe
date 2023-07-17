<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageData extends Model
{
    use HasFactory;

    protected $table = 'image_data';
    protected $fillable = ['image_name', 'image_path', 'image_type', 'image_size', 'post_id'];

//    public function posts(){return $this->belongsTo(Posts::class);}
}
