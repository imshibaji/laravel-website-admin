<?php

namespace Shibaji\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Business extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    // protected $fillable = ['business_name', 'business_type'];

    protected $appends = ['cron_command'];

    public function getCronCommandAttribute(){
        return 'artisan schedule:run >> /dev/null 2>&1';
    }

    public function first(){
        return $this->getFirstMedia();
    }
}
