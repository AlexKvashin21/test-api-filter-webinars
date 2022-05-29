<?php

namespace App\Http\Controllers;

use App\Http\Filters\WebinarFilter;
use App\Http\Requests\Webinar\FilterRequest;
use App\Models\Webinar;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated(); //Провалидированные данные

        $filter = app()->make(WebinarFilter::class, ['queryParams' => array_filter($data)]); //Фильтр реализован по шаблону

        $webinars = Webinar::filter($filter)->get(); // Получаем все отфильтрованные вебинары


        //Возвращаем ответ в json
        return response()
            ->json([
                'webinars' => $webinars
            ])->setStatusCode(200, 'Webinar list');
    }
}
