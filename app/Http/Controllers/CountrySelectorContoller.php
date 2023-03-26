<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Country;
use App\Models\State;
use App\Models\City;
use Response;

class CountrySelectorContoller extends Controller
{
    public function ListCountry(){
        // return Country::get()->all();
        return  Response::json(Country::get()->all(), 200);
    }
    public function ListStates(Request $request){
        return  Response::json(State::where('country_id','=',$request->CountryID)->get(), 200);

    }
    
    public function ListCities(Request $request){
        return  Response::json(City::where('state_id','=',$request->StateID)->get(), 200);

    }
}
