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
        return response()->json([
            "status"=>200,
            "data"=>  Country::get()->toArray(),
        ],200);
    }
    public function ListStates(Request $request){
        return response()->json([
            "status"=>200,
            "data"=>  State::where('country_id','=',$request->CountryID)->get()->toArray(),
        ],200);
    }
    
    public function ListCities(Request $request){

        return response()->json([
            "status"=>200,
            "data"=>  City::where('state_id','=',$request->StateID)->get()->toArray(),
        ],200);



    }
}
