<?php

namespace Shibaji\Admin\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Shibaji\Admin\Models\Common\Item;

class Tax extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['business_id','name', 'rate', 'type', 'enabled'];

    public function scopeGetAllByBusiness($query){
        return $query->where($this->table.'.business_id','=', business()->id)->get();
    }
    public function business(){
        return $this->belongsTo(Business::class);
    }

    public function item(){
        return $this->belongsTo(Item::class);
    }

    public function setEnabledAttribute($value)
    {
        $this->attributes['enabled'] = ($value == 'true')? 1 : 0;
    }
    public function getEnabledAttribute()
    {
        return ($this->attributes['enabled'] == 1) ? 'true' : 'false';
    }
}
