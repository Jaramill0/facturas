<?php

namespace App\Http\Controllers;

use App\Models\PedidosItem;
use Illuminate\Http\Request;

/**
 * Class PedidosItemController
 * @package App\Http\Controllers
 */
class PedidosItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidosItems = PedidosItem::paginate();

        return view('pedidos-item.index', compact('pedidosItems'))
            ->with('i', (request()->input('page', 1) - 1) * $pedidosItems->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pedidosItem = new PedidosItem();
        return view('pedidos-item.create', compact('pedidosItem'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PedidosItem::$rules);

        $pedidosItem = PedidosItem::create($request->all());

        return redirect()->route('pedidos-items.index')
            ->with('success', 'PedidosItem created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedidosItem = PedidosItem::find($id);

        return view('pedidos-item.show', compact('pedidosItem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedidosItem = PedidosItem::find($id);

        return view('pedidos-item.edit', compact('pedidosItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PedidosItem $pedidosItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PedidosItem $pedidosItem)
    {
        request()->validate(PedidosItem::$rules);

        $pedidosItem->update($request->all());

        return redirect()->route('pedidos-items.index')
            ->with('success', 'PedidosItem updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pedidosItem = PedidosItem::find($id)->delete();

        return redirect()->route('pedidos-items.index')
            ->with('success', 'PedidosItem deleted successfully');
    }
}
