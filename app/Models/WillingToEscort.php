<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WillingToEscort extends Model
{
    use HasFactory;

    protected $table = 'willing_to_escort';
    protected $fillable = ['willing_to_escort'];

//    public function EscortPhysicalStats(){return $this->hasMany(EscortPhysicalStats::class);}
//    public function Posts(){return $this->hasManyThrough(Posts::class, EscortPhysicalStats::class, 'willing_to_escort_id', 'escort_physical_stats_id');}
}
