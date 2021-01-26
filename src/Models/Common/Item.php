<?php

namespace Shibaji\Admin\Models\Common;

use App\Invoice;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Shibaji\Admin\Models\Setting\Category;
use Shibaji\Admin\Models\Setting\Tax;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Item extends Model implements HasMedia
{
    use HasFactory;
    use SoftDeletes;
    use InteractsWithMedia;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['business_id', 'sku', 'name', 'description', 'sale_price', 'purchase_price', 'category_id', 'tax_id', 'enabled'];


    public function scopeGetAllByBusiness($query){
        return $query->where($this->table.'.business_id','=', business()->id)->get();
    }
    public function business(){
        return $this->belongsTo(Business::class);
    }
    public function tax(){
        return $this->taxed->rate ?? 0;
    }
    public function taxed(){
        return $this->belongsTo(Tax::class, 'tax_id');
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function addPicture($file){
        if($file){
            $this->addMedia($file)->toMediaCollection('item');
        }
    }
    public function imgUrl(){
        return $this->getFirstMediaUrl('item');
    }
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('item')->singleFile();
    }
    public function deleteFile(): void
    {
        $this->clearMediaCollection('item');
    }

    public function setEnabledAttribute($value)
    {
        $this->attributes['enabled'] = ($value == 'enabled')? 1 : 0;
    }
    public function getEnabledAttribute()
    {
        return ($this->attributes['enabled'] == 1) ? 'enabled' : 'disabled';
    }
    public function setBusinessIdAttribute(){
        $this->attributes['business_id'] = Business::where('default', 'on')->first()->id;
    }
    public function getOnBusinessAttribute(){
        return Business::where('default', 'on')->first();
    }
}
