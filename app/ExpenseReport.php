<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseReport extends Model
{
    protected $table = 'expense_reports';
    
    public function expenses() {
        return $this->hasMany(Expense::class);
    }
}
