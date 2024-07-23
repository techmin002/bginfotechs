<?php

namespace Modules\Client\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Client\Database\factories\PackageFactory;

class Package extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'title',
        'image',
        'duration',
        'description',
        'package_category',
    ];
    
    protected static function newFactory(): PackageFactory
    {
        //return PackageFactory::new();
    }
}
