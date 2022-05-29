<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    //Связываем темы с вебинарами в отношении многие к одному
    public function webinars(){
        return $this->hasMany(Webinar::class, 'webinar_id', 'id');
    }
}
