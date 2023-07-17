<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HairColor extends Model
{
    use HasFactory;

    protected $table = 'hair_colors';
    protected $fillable = ['hair_color'];

//    public function EscortPhysicalStats(){return $this->hasMany(EscortPhysicalStats::class);}
//    public function Posts(){return $this->hasManyThrough(Posts::class, EscortPhysicalStats::class, 'hair_colors_id', 'escort_physical_stats_id');}
}
