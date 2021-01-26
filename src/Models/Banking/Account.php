<?php

namespace Shibaji\Admin\Models\Banking;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Shibaji\Admin\Models\Setting\Currency;
use Shibaji\Admin\Traits\Transactions;

class Account extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Transactions;

    protected $fillable = [
        'business_id',
        'name',
        'currency_code',
        'opening_balance',
        'bank_name',
        'account_holder_name',
        'account_number',
        'ifsc_code',
        'bank_phone',
        'bank_address',
        'enabled'
    ];

    public function scopeGetAllByBusiness($query){
        return $query->where($this->table.'.business_id','=', business()->id)->get();
    }
    public function business(){
        return $this->belongsTo(Business::class);
    }

    public function setEnabledAttribute($value)
    {
        $this->attributes['enabled'] = ($value == 'true')? 1 : 0;
    }
    public function getEnabledAttribute()
    {
        return ($this->attributes['enabled'] == 1) ? 'true' : 'false';
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_code', 'code');
    }

    public function expense_transactions()
    {
        return $this->transactions()->whereIn('type', (array) $this->getExpenseTypes());
    }

    public function income_transactions()
    {
        return $this->transactions()->whereIn('type', (array) $this->getIncomeTypes());
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function scopeName($query, $name)
    {
        return $query->where('name', '=', $name);
    }

    public function scopeNumber($query, $number)
    {
        return $query->where('number', '=', $number);
    }

    /**
     * Convert opening balance to double.
     *
     * @param  string  $value
     * @return void
     */
    public function setOpeningBalanceAttribute($value)
    {
        $this->attributes['opening_balance'] = (double) $value;
    }

    /**
     * Get the current balance.
     *
     * @return string
     */
    public function getBalanceAttribute()
    {
        // Opening Balance
        $total = $this->opening_balance;

        // Sum Incomes
        $total += $this->income_transactions->sum('amount');

        // Subtract Expenses
        $total -= $this->expense_transactions->sum('amount');

        return $total;
    }
}
