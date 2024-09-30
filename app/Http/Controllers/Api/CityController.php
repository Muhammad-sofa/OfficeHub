<?php

namespace App\Http\Controllers\Api;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\CityResource;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::withCount('officeSpaces')->get();
        //collection digunakan di index karna ingin menampilkan lebih dari data city
        return CityResource::collection($cities);
    }

    public function show(City $city)
    {
        $city->load(['officeSpaces.city', 'officeSpaces.photos']);
        $city->loadCount('officeSpaces');
        //new digunakan karna kita ingin mengakses data pada detail city itu sendiri
        return new CityResource($city);
    }
}
