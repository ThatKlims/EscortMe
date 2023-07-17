<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EscortContactInfo extends Model
{
    use HasFactory;

    protected $table = 'escort_contact_info';
    protected $fillable = ['phone_number', 'email', 'instagram_link', 'twitter_link', 'facebook_link', 'onlyfans_link', 'discord_name_and_id'];

//    public function Posts(){return $this->hasOne(Posts::class);}
}
