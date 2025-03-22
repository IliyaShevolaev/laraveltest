<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request)
    {
        $name = $request->query('name');
        $age = $request->query('age');

        if (!$name || !$age) {
            return response()->json([
                'error' => 'Параметры name и age обязательны.'
            ], 422);
        }

        return response()->json([
            'message' => "Привет, $name! Тебе $age лет."
        ], 200);
    }

    public function getTheme(Request $request)
    {
        $theme = $request->json('settings.theme');

        return response()->json([
            'selected_theme' => $theme
        ], 200);
    }
}
