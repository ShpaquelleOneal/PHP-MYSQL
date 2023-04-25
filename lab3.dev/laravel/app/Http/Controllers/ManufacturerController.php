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

    public function create($countryslug)
    {
        $country = Country::where('code','=', $countryslug)->first();
        return view('manufacturer_new', compact('country'));
    }
    
    public function store(Request $request)
    {
        $manufacturer = new Manufacturer();
        $manufacturer->name = $request->manufacturer_name;
        $manufacturer->country_id = $request->country_id;
        $manufacturer->save();

        #to perform a redirect back, we need country code from ID
        $country = Country::findOrFail($request->country_id);
        $action = action([ManufacturerController::class, 'index'], ['countryslug' => $country->code]);
        return redirect($action);
    }
}