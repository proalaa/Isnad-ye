<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function listCountries()
    {
        $countries = Country::all();
        return response()->json($countries);
    }

    public function listCitiesForCountry(Request $request)
    {
        $cities = City::where('country_id' ,$request->get('country_id'))->get();
        return response()->json($cities);
    }

}
