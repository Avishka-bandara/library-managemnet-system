<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    protected $table ="table_finance";
    protected $fillable =[
        'membership_amount',
        'fine_amount',
        'membership_renew_amount'

        
    ];
    public function financeIssueDetail()
    {
        return $this->hasMany(FinanceIssueDetail::class, 'finance_issue_id');
    }

}
