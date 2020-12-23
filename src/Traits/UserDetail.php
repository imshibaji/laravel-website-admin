<?php
namespace Shibaji\Admin\Traits;

use Shibaji\Admin\Models\UserDetail as ModelsUserDetail;

trait UserDetail{
    public function user_detail(){
        return $this->hasOne(ModelsUserDetail::class);
    }
}
