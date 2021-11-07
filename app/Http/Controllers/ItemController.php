<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pageName = "Barang";
        $items = Item::all();

        return view('admin.items.index', compact(['items', 'pageName']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageName = "Barang";

        return view('admin.items.create', compact(['pageName']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $fillable = [
            'name' => strtoupper($data['name']),
            'code' => strtoupper($data['code']),
            'price' => $data['price'],
            'is_active' => array_key_exists('is_active', $data)
        ];

        $item = new Item($fillable);
        $item->save();

        return redirect()->route('admin.items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Item $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Item $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
        $pageName = "Barang";
        return view('admin.items.edit', compact(['item', 'pageName']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Item $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
        $data = $request->all();
        $item->name = strtoupper($data['name']) ?? $item->name;
        $item->code = strtoupper($data['code']) ?? $item->code;
        $item->price = $data['price'] ?? $item->price;
        $item->is_active = array_key_exists('is_active', $data) ?? $item->is_active;

        $item->save();
        return redirect()->route("admin.items.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Item $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
        $item->delete();

        return redirect()->route('admin.items.index');
    }
}
