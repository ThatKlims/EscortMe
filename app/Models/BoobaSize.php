<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoobaSize extends Model
{
    use HasFactory;
    protected $table = 'booba_sizes';
    protected $fillable = ['booba_size'];

//    public function EscortPhysicalStats(){return $this->hasMany(EscortPhysicalStats::class);}
//    public function Posts(){return $this->hasManyThrough(Posts::class, EscortPhysicalStats::class, 'BoobaSize_id', 'escort_physical_stats_id');}
}
