<?php

namespace Shibaji\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function seo(){
        return $this->belongsTo(SeoOptimization::class, 'seo_optimization_id');
    }
}
