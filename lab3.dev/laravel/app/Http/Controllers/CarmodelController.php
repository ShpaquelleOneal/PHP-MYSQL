<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carmodel;
use App\Models\Manufacturer;

class CarmodelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($man_id)
    {
        $manufacturer = Manufacturer::findOrFail($man_id);
        $carmodels = Carmodel::where('manufacturer_id','=', $man_id)->get();
        return view('models', compact('manufacturer', 'carmodels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($man_id)
    {
        $manufacturer = Manufacturer::where('id','=', $man_id)->first();
        return view('model_new', compact('manufacturer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'starting_price' => ['numeric','min:0'],
            'production_date' => ['integer', 'min:1990'],
        ]);

        $carmodel = new Carmodel();
        $carmodel->name = $request->model_name;
        $carmodel->production_started = $validatedData['production_date'];
        $carmodel->min_price = $validatedData['starting_price'];
        $carmodel->manufacturer_id = $request->man_id;
        $carmodel->save();

        $action = action([CarmodelController::class, 'index'], ['id' => $request->man_id]);
        return redirect($action);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $carmodel = Carmodel::findOrFail($id);
        return view('model_edit', compact('carmodel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'starting_price' => ['numeric','min:0'],
            'production_date' => ['integer', 'min:1990'],
        ]);

        $carmodel = Carmodel::findOrFail($id);
        $carmodel->name = $request->model_name;
        $carmodel->production_started = $validatedData['production_date'];
        $carmodel->min_price = $validatedData['starting_price'];
        $carmodel->manufacturer_id = $request->man_id;
        $carmodel->save();
        return redirect(action([CarmodelController::class, 'index'], ['man_id' => $carmodel->manufacturer_id]));
    }
}
