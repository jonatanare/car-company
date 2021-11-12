<?php

namespace App\Http\Controllers;

use App\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotes = Quote::all();

        return view('quote')->with(compact('quotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
			'mount.required' => 'Es necesario ingresar un monto mayor a $80,000',
			'mount.min' => 'El nombre del producto debe tener al menos 6 caracteres',
			'description.required' => 'La description corta es obligatorio',
			'description.max' => 'La descripcion corta admite solo 30 caracteres',
			'price.required' => 'Es obligatorio definir un precio para el producto',
			'price.numeric' => 'Ingrese u  numero valido',
			'price.min' => 'No se admiten valores negativos',
		];
		$rules = [
			'name' => 'required|min:6',
			'description' => 'required|max:100',
			'price' => 'required|numeric|min:0',
		];

		$quotes = new Quote();
		$quotes->mount = $request->input('mount'); // monto de credito o costo de vehiculo
		$quotes->termins = $request->input('termins'); // meses
		$quotes->interests = $request->input('interests'); //tasa
		$quotes->initial_payment = $request->input('initial_payment');

        $t = ($request->input('interests') / 12) / 100;

        $n = $request->input('termins');

        $m = $request->input('mount') - $request->input('initial_payment') ;

        $pago_mensual = ($t * $m) / (1 - (pow(1 + $t, -$n)));

        $quotes->quote = $pago_mensual;

		$quotes->save(); //ejecutar una consulta INSERT a la tabla productos

		return redirect('/quote');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function show(Quote $quote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function edit(Quote $quote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quote $quote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quote $quote)
    {
        //
    }
}
