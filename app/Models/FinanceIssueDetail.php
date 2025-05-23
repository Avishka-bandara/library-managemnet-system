<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinanceIssueDetail extends Model
{
    protected $table = 'table_finance_issue_detail';
    protected $fillable = [
        'finance_issue_id',
        'membership_id',
        'book_id',
    ];


    public function membershipDetail(){
        return $this->hasMany(Member::class, 'id', 'membership_id');
    }

    public function financeDetail(){
        return $this->hasMany(Finance::class, 'id', 'finance_issue_id');
    }
    
    public function bookDetail(){
        return $this->hasMany(Book::class, 'id', 'book_id');
    }

}
