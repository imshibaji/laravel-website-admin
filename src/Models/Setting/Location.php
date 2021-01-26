<?php

namespace Shibaji\Admin\Models\Setting;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['business_id', 'location_name', 'address1', 'address2', 'city', 'state', 'country_id', 'zip', 'user_id'];

    public function scopeGetAllByBusiness($query){
        return $query->where($this->table.'.business_id','=', business()->id)->get();
    }
    public function business(){
        return $this->belongsTo(Business::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function country(){
        return $this->belongsTo(Country::class);
    }
}
