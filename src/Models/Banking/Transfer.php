<?php

namespace Shibaji\Admin\Models\Banking;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;

    protected $fillable = ['business_id', 'expense_transaction_id', 'income_transaction_id'];

    public function scopeGetAllByBusiness($query){
        return $query->where($this->table.'.business_id','=', business()->id)->get();
    }
    public function business(){
        return $this->belongsTo(Business::class);
    }

    public function expense_transaction()
    {
        return $this->belongsTo(Transaction::class, 'expense_transaction_id');
    }

    public function expense_account()
    {
        return $this->belongsTo(Account::class, 'expense_transaction.account_id', 'id');
    }

    public function income_transaction()
    {
        return $this->belongsTo(Transaction::class, 'income_transaction_id');
    }

    public function income_account()
    {
        return $this->belongsTo(Account::class, 'income_transaction.account_id', 'id');
    }
}
