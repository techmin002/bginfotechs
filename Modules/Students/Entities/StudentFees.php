<?php

namespace Modules\Students\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Students\Database\factories\StudentFeesFactory;

class StudentFees extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $table = 'student_fees';
    protected $fillable = [
        'fees',
        'student_id',
        'date',
        'receipt',
        'method',
        'status',
    ];
    
    protected static function newFactory(): StudentFeesFactory
    {
        //return StudentFeesFactory::new();
    }
}
