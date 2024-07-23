<?php

namespace Modules\Client\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Client\Database\factories\ClientFactory;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'company_name',
        'user_id',
        'address',
        'phone_no',
        'company_phone',
        'company_address',
        'company_logo',
        'pan_vat',
        'company_state',
        'company_details',
        'status'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected static function newFactory(): ClientFactory
    {
        //return ClientFactory::new();
    }
}
