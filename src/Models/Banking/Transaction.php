<?php

namespace Shibaji\Admin\Models\Banking;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Shibaji\Admin\Models\Common\Contact;
use Shibaji\Admin\Models\Purchase\Bill;
use Shibaji\Admin\Models\Sale\Invoice;
use Shibaji\Admin\Models\Setting\Category;
use Shibaji\Admin\Models\Setting\Currency;
use Shibaji\Admin\Models\Setting\Recurring;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['business_id', 'type', 'account_id', 'paid_at', 'amount', 'currency_code', 'currency_rate', 'document_id', 'contact_id', 'description', 'category_id', 'payment_method', 'reference', 'parent_id'];


    public $sortable = ['paid_at', 'amount','category.name', 'account.name'];


    public $cloneable_relations = ['recurring'];


    public function scopeGetAllByBusiness($query){
        return $query->where($this->table.'.business_id','=', business()->id)->get();
    }
    public function business(){
        return $this->belongsTo(Business::class);
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function bill()
    {
        return $this->belongsTo(Bill::class, 'document_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_code', 'code');
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'document_id');
    }

    public function recurring()
    {
        return $this->morphOne(Recurring::class, 'recurable');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'contact_id', 'id');
    }

    public function scopeType($query, $types)
    {
        if (empty($types)) {
            return $query;
        }

        return $query->whereIn($this->table . '.type', (array) $types);
    }

    public function scopeIncome($query)
    {
        return $query->whereIn($this->table . '.type', (array) $this->getIncomeTypes());
    }

    public function scopeExpense($query)
    {
        return $query->whereIn($this->table . '.type', (array) $this->getExpenseTypes());
    }

    public function scopeIsTransfer($query)
    {
        return $query->where('category_id', '=', Category::transfer());
    }

    public function scopeIsNotTransfer($query)
    {
        return $query->where('category_id', '<>', Category::transfer());
    }

    public function scopeIsDocument($query)
    {
        return $query->whereNotNull('document_id');
    }

    public function scopeIsNotDocument($query)
    {
        return $query->whereNull('document_id');
    }

    public function scopeDocument($query, $document_id)
    {
        return $query->where('document_id', '=', $document_id);
    }

    public function scopeLatest($query)
    {
        return $query->orderBy('paid_at', 'desc');
    }

    public function scopePaid($query)
    {
        return $query->sum('amount');
    }

    public function scopeIsReconciled($query)
    {
        return $query->where('reconciled', 1);
    }

    public function scopeIsNotReconciled($query)
    {
        return $query->where('reconciled', 0);
    }

    public function onCloning($src, $child = null)
    {
        $this->document_id = null;
    }

    public function setAmountAttribute($value)
    {
        $this->attributes['amount'] = (double) $value;
    }

    public function setCurrencyRateAttribute($value)
    {
        $this->attributes['currency_rate'] = (double) $value;
    }

    public function getAmountForAccountAttribute()
    {
        $amount = $this->amount;

        // Convert amount if not same currency
        if ($this->account->currency_code != $this->currency_code) {
            $to_code = $this->account->currency_code;
            $to_rate = config('money.' . $this->account->currency_code . '.rate');

            $amount = $this->convertBetween($amount, $this->currency_code, $this->currency_rate, $to_code, $to_rate);
        }

        return $amount;
    }

    public function getAttachmentAttribute($value)
    {
        if (!empty($value) && !$this->hasMedia('attachment')) {
            return $value;
        } elseif (!$this->hasMedia('attachment')) {
            return false;
        }

        return $this->getMedia('attachment')->last();
    }

    public function getTypeTitleAttribute($value)
    {
        return $value ?? trans_choice('general.' . Str::plural($this->type), 1);
    }

    public function getRouteNameAttribute($value)
    {
        if ($value) {
            return $value;
        }

        if ($this->isIncome()) {
            return !empty($this->document_id) ? 'invoices.show' : 'revenues.edit';
        }

        if ($this->isExpense()) {
            return !empty($this->document_id) ? 'bills.show' : 'payments.edit';
        }

        return 'transactions.index';
    }

    public function getRouteIdAttribute($value)
    {
        return $value ?? $this->document_id ?? $this->id;
    }
}
