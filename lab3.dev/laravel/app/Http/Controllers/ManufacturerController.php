<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($countryslug)
    {
        //look up the country by its 2-letter code
        $country = Country::where('code','=', $countryslug)->first();
        
        #use Eloquent relations to find all manufacturers in that country
        $manufacturers = $country->manufacturers()->get(); 
        
        return view('manufacturers', ['country' => $country, 'manufacturers' => $manufacturers]);
    }
}