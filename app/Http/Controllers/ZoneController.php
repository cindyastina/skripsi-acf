<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pageName = "Daerah";
        $zones = Zone::all();

        return view('admin.zones.index', compact(['zones', 'pageName']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageName = "Daerah";

        return view('admin.zones.create', compact(['pageName']));
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
            'name' => strtoupper($data['name'])
        ];

        $zone = new Zone($fillable);
        $zone->save();

        return redirect()->route('admin.zones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Zone $zone
     * @return \Illuminate\Http\Response
     */
    public function show(Zone $zone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Zone $zone
     * @return \Illuminate\Http\Response
     */
    public function edit(Zone $zone)
    {
        //
        $pageName = "Daerah";
        return view('admin.zones.edit', compact(['zone', 'pageName']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Zone $zone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zone $zone)
    {
        //
        $data = $request->all();
        $zone->name = strtoupper($data['name']) ?? $zone->name;

        $zone->save();
        return redirect()->route("admin.zones.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Zone $zone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zone $zone)
    {
        //
        $zone->delete();

        return redirect()->route('admin.zones.index');
    }
}
