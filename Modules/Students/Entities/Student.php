<?php

namespace Modules\Students\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Students\Database\factories\StudentFactory;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $table='students';
    protected $fillable = [
        'name',
        'user_id',
        'address',
        'phone',
        'training',
        'qualification',
        'admission_date',
        'complete_date',
        'total_fees',
        'paid_fees',
        'due_fees',
        'certificate',
        'status'
    ];
    
    protected static function newFactory(): StudentFactory
    {
        //return StudentFactory::new();
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function fees()
    {
        return $this->hasMany (StudentFees::class);
    }
}
