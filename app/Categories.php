<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    public function subCategories(){
        return $this->hasMany('App\SubCategories', 'id_category','id');
    }

}
