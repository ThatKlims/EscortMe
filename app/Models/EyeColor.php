<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EyeColor extends Model
{
    use HasFactory;

    protected $table = 'eye_colors';
    protected $fillable = ['eye_color'];

//    public function EscortPhysicalStats(){return $this->hasMany(EscortPhysicalStats::class);}
//    public function Posts(){return $this->hasManyThrough(Posts::class, EscortPhysicalStats::class, 'eye_colors_id', 'escort_physical_stats_id');}
}
