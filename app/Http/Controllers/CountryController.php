<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::with('cities')->get();
        foreach ($countries as $country) {
            $country->cities = $country->cities->sortBy('population');
        }

        return view('countries.index', compact('countries'));
    }
}
