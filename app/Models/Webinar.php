<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webinar extends Model
{
    use HasFactory, Filterable;

    //Скрываем эти поля
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    //Форматируем дату в день/месяц/год
    protected $casts = [
        'date' => 'datetime:d/m/Y',
    ];

    //Связываем вебинары и темы с отношением один ко многим
    public function theme(){
        return $this->belongsTo(Theme::class, 'theme_id', 'id');
    }
}
