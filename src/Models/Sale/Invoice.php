<?php

namespace Shibaji\Admin\Models\Sale;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Shibaji\Admin\Database\Factories\InvoiceFactory;
use Shibaji\Admin\Models\Common\Business;
use Shibaji\Admin\Models\Setting\Category;
use Shibaji\Admin\Models\Setting\Tax;

class Invoice extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return InvoiceFactory::new();
    }

    public function scopeGetAllByBusiness($query){
        return $query->where($this->table.'.business_id','=', business()->id)->get();
    }
    public function business(){
        return $this->belongsTo(Business::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function items(){
        return $this->hasMany(InvoiceItem::class);
    }
    public function histories(){
        return $this->hasMany(InvoiceHistory::class);
    }

    public function addFile($file){
        if($file){
            $this->addMedia($file)->toMediaCollection('invoice');
        }
    }
    public function fileUrl(){
        return $this->getFirstMediaUrl('invoice');
    }
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('invoice');
    }
    public function deleteFile(): void
    {
        $this->clearMediaCollection('invoice');
    }
}
