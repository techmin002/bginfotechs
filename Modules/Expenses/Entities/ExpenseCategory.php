<?php

namespace Modules\Expenses\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Expenses\Database\factories\ExpenseCategoryFactory;

class ExpenseCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['title','icon','description','status','parent'];
    
    protected static function newFactory(): ExpenseCategoryFactory
    {
        //return ExpenseCategoryFactory::new();
    }
}
