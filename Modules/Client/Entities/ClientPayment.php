<?php

namespace Modules\Client\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Client\Database\factories\ClientPaymentFactory;

class ClientPayment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'receipt',
        'paid_amount',
        'paid_date',
        'methods',
    ];
    
    protected static function newFactory(): ClientPaymentFactory
    {
        //return ClientPaymentFactory::new();
    }
}
