<?php

namespace App\Http\Controllers;

final class ContentController extends Controller
{
    public function firstPage()
    {
        return view('content.first', [
            'title' => 'Первая страница контента',
            'content' => 'Контент 1'
        ]);
    }

    public function secondPage()
    {
        return view('content.second', [
            'title' => 'Вторая страница контента',
            'content' => 'Контент 2'
        ]);
    }

    public function thirdPage()
    {
        return view('content.third', [
            'title' => 'Третья страница контента',
            'content' => 'Контент 3'
        ]);
    }
}
