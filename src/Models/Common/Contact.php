<?php

namespace Shibaji\Admin\Models\Common;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['business_id', 'type', 'name', 'email', 'tax_number', 'phone', 'address', 'website', 'currency_code', 'enabled', 'reference'];

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
    public function scopeAsCustomers($query){
        return $query->where('type', 'customer')->where($this->table.'.business_id','=', business()->id)->get();
    }
    public function scopeAsVendors($query){
        return $query->where('type', 'vendor')->where($this->table.'.business_id','=', business()->id)->get();
    }
}
