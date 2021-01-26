<?php

namespace Shibaji\Admin\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Website extends Model implements HasMedia
{
    use HasFactory;
    use SoftDeletes;
    use InteractsWithMedia;

    public function business(){
        return $this->belongsTo(Business::class);
    }
    public function addPicture($file){
        if($file){
            $this->addMedia($file)->toMediaCollection('website');
        }
    }
    public function first(){
        return $this->getFirstMediaUrl('website');
    }
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('website')->singleFile();
    }
    public function deleteFile(): void
    {
        $this->clearMediaCollection('website');
    }
}
