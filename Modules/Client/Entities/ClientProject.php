<?php

namespace Modules\Client\Entities;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Client\Database\factories\ClientProjectFactory;

class ClientProject extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'title',
        'start_date',
        'end_date',
        'paid_amount',
        'price',
        'description',
        'status'
    ];
    protected $dates = [
        'start_date',
        'end_date',
    ];
    public function payments()
    {
        return $this->hasMany(Payment::class,'table_id','id')->where('table','ClientProject');
    }
    
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function package()
    {
        return $this->belongsTo(Package::class);
    }
    public function clientPayment(){
        return $this->belongsTo(ClientPayment::class,'id','project_id');
    }
    public function clientPayments(){
        return $this->hasMany(ClientPayment::class,'project_id','id');
    }
    protected static function newFactory(): ClientProjectFactory
    {
        //return ClientProjectFactory::new();
    }
}
