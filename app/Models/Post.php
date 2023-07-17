<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = ['alias',
        'description',
        'location',
        'active_state',
        'escort_physical_stats_id',
        'escort_contact_info_id',
        'users_id'];

    public function escortPhysicalStats(){ return $this->belongsTo(EscortPhysicalStats::class); }
    public function imageData() { return $this->hasMany(ImageData::class); }
    public function escortContactInfo() { return $this->belongsTo(EscortContactInfo::class); }
    public function user() { return $this->belongsTo(User::class); }
}
