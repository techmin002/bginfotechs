<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMediaRequest extends Model
{
    use HasFactory;
    protected $table='social_media_requests';
    protected $fillable=[
        'name',
        'email',
        'phone',
        'business_category',
        'no_graphics',
        'no_videos',
        'package',
        'status'
    ];
}
