<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Service\Entities\Service;

class Contact extends Model
{
    use HasFactory;
    protected $table='contacts';
    protected $fillable =[
        'name','email','contact','service_id','message','status'
    ];

    public function service()
    {
        return $this->hasOne(Service::class,'id','service_id');
    }
}
