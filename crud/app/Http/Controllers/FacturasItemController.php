<?php

namespace App\Http\Controllers;

use App\Models\FacturasItem;
use Illuminate\Http\Request;

/**
 * Class FacturasItemController
 * @package App\Http\Controllers
 */
class FacturasItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturasItems = FacturasItem::paginate();

        return view('facturas-item.index', compact('facturasItems'))
            ->with('i', (request()->input('page', 1) - 1) * $facturasItems->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facturasItem = new FacturasItem();
        return view('facturas-item.create', compact('facturasItem'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(FacturasItem::$rules);

        $facturasItem = FacturasItem::create($request->all());

        return redirect()->route('facturas-items.index')
            ->with('success', 'FacturasItem created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $facturasItem = FacturasItem::find($id);

        return view('facturas-item.show', compact('facturasItem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facturasItem = FacturasItem::find($id);

        return view('facturas-item.edit', compact('facturasItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  FacturasItem $facturasItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FacturasItem $facturasItem)
    {
        request()->validate(FacturasItem::$rules);

        $facturasItem->update($request->all());

        return redirect()->route('facturas-items.index')
            ->with('success', 'FacturasItem updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $facturasItem = FacturasItem::find($id)->delete();

        return redirect()->route('facturas-items.index')
            ->with('success', 'FacturasItem deleted successfully');
    }
}
