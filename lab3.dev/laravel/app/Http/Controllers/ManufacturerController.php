<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255', Rule::unique('manufacturers')],
            'founded' => ['required', 'integer', 'min:1900', 'max:'.date('Y')],
            'website' => ['nullable', 'url'],
        ]);
        $manufacturer = new Manufacturer();
        $manufacturer->name = $validatedData['name'];
        $manufacturer->founded = $validatedData['founded'];
        $manufacturer->website = $validatedData['website'];
        $manufacturer->country_id = $request->country_id;
        $manufacturer->save();

        #to perform a redirect back, we need country code from ID
        $country = Country::findOrFail($request->country_id);
        $action = action([ManufacturerController::class, 'index'], ['countryslug' => $country->code]);
        return redirect($action);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $manufacturer = Manufacturer::findOrFail($id);
        return view('manufacturer_edit', compact('manufacturer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'founded' => ['required', 'integer', 'min:1900', 'max:'.date('Y')],
            'website' => ['nullable', 'url'],
        ]);

        $manufacturer = Manufacturer::findOrFail($id);
        $manufacturer->name = $validatedData['name'];
        $manufacturer->founded = $validatedData['founded'];
        $manufacturer->website = $validatedData['website'];
        $manufacturer->save();
        return redirect(action([ManufacturerController::class, 'index'], ['countryslug' => $manufacturer->country->code]));
    }

}