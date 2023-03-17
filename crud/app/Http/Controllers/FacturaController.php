<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;

/**
 * Class FacturaController
 * @package App\Http\Controllers
 */
class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturas = Factura::paginate();

        return view('factura.index', compact('facturas'))
            ->with('i', (request()->input('page', 1) - 1) * $facturas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $factura = new Factura();
        return view('factura.create', compact('factura'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Factura::$rules);

        $factura = Factura::create($request->all());

        return redirect()->route('facturas.index')
            ->with('success', 'Factura created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $factura = Factura::find($id);

        return view('factura.show', compact('factura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $factura = Factura::find($id);

        return view('factura.edit', compact('factura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Factura $factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factura $factura)
    {
        request()->validate(Factura::$rules);

        $factura->update($request->all());

        return redirect()->route('facturas.index')
            ->with('success', 'Factura updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $factura = Factura::find($id)->delete();

        return redirect()->route('facturas.index')
            ->with('success', 'Factura deleted successfully');
    }
}
