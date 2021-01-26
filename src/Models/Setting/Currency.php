<?php

namespace Shibaji\Admin\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $fillable = ['business_id', 'name', 'code', 'rate', 'enabled', 'precision', 'symbol', 'symbol_position', 'decimal_mark', 'thousand_separator', 'default'];

    public function scopeGetAllByBusiness($query){
        return $query->where($this->table.'.business_id','=', business()->id)->get();
    }
    public function business(){
        return $this->belongsTo(Business::class);
    }
    public function setEnabledAttribute($value)
    {
        // dd($value);
        $this->attributes['enabled'] = ($value == 'true')? 1 : 0;
    }
    public function getEnabledAttribute()
    {
        return ($this->attributes['enabled'] == 1) ? 'true' : 'false';
    }

    public function setDefaultAttribute($value)
    {
        $this->attributes['default'] = ($value == 'true')? 1 : 0;
    }
    public function getDefaultAttribute()
    {
        return ($this->attributes['default'] == 1) ? 'true' : 'false';
    }
}
