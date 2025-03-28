<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showOne($id) 
    {
        $pages = [
            1 => 'страница 1',
            2 => 'страница 2',
            3 => 'страница 3',
            4 => 'страница 4',
            5 => 'страница 5',
        ];

        if (isset($pages[$id])) {
            dd($pages[$id]);
        } else {
            dd($id . ' - отсутствует');
        }
    }

    public function showAll()
    {
        dd('Строка из showAll');
    }

    public function showView()
    {
        return view('page.show.viewFromController');
    }

    public function showViewParams($name, $surname)
    {
        return view('page.show.viewWithParams', [
            'name' => $name,
            'surname' => $surname,
        ]);
    }
}
