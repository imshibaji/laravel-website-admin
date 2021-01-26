<?php

namespace Shibaji\Admin\Models\Setting;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['business_id', 'name', 'type', 'color', 'enabled'];

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

    public function scopeIncome(Builder $query){
        return $query->where($this->table.'.type', '=', 'income');
    }

    public function scopeExpanse(Builder $query){
        return $query->where($this->table.'.type', '=', 'expanse');
    }

    public function scopeItem(Builder $query){
        return $query->where($this->table.'.type', '=', 'items');
    }

    public function scopeOther(Builder $query){
        return $query->where($this->table.'.type', '=', 'other');
    }

    public function scopeName($query, $name)
    {
        return $query->where('name', '=', $name);
    }
    public function scopeTransfer($query)
    {
        return (int) $query->other()->pluck('id')->first();
    }
}
