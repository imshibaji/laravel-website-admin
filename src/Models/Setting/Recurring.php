<?php

namespace Shibaji\Admin\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recurring extends Model
{
    use HasFactory;

    public function scopeGetAllByBusiness($query){
        return $query->where($this->table.'.business_id','=', business()->id)->get();
    }
    public function business(){
        return $this->belongsTo(Business::class);
    }
}
