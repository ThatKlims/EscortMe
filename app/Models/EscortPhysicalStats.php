<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EscortPhysicalStats extends Model
{
    use HasFactory;

    protected $table = 'escort_physical_stats';
    protected $fillable = ['age', 'height', 'weight', 'ethnicity_id', 'booba_size_id', 'willing_to_escort_id', 'eye_color_id', 'hair_color_id'];

    public function ethnicity(){ return $this->belongsTo(Ethnicity::class); }
    public function boobaSize(){ return $this->belongsTo(BoobaSize::class); }
    public function willingToEscort(){ return $this->belongsTo(WillingToEscort::class); }
    public function eyeColor(){ return $this->belongsTo(EyeColor::class); }
    public function hairColor(){ return $this->belongsTo(HairColor::class); }

}
