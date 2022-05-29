<?php

namespace App\Http\Filters;

use App\Models\Webinar;
use Illuminate\Database\Eloquent\Builder;

class WebinarFilter extends AbstractFilter
{
    public const NAME = 'name';
    public const MONTH = 'month';
    public const THEME = 'theme';



    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],
            self::MONTH => [$this, 'month'],
            self::THEME => [$this, 'theme'],
        ];
    }

    public function name(Builder $builder, $value)
    {
        $builder->whereIn('name',  $value);// Фильтрация по названию
    }

    public function month(Builder $builder, $value)
    {
        $builder->whereIn(Webinar::raw('MONTH(date)'), $value); //Фильтрация по месяцу
    }

    public function theme(Builder $builder, $value)
    {
        $builder->whereIn('theme_id', $value); //Фильтрация по теме
    }
}
