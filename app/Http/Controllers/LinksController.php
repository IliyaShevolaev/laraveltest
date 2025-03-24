<?php

namespace App\Http\Controllers;

class LinksController extends Controller
{
    public function index()
    {
        $links = [
            [
                'text' => 'text1',
                'href' => 'href1',
            ],
            [
                'text' => 'text2',
                'href' => 'href2',
            ],
            [
                'text' => 'text3',
                'href' => 'href3',
            ],
        ];

        return view('links.index', compact('links'));
    }
}
