<?php

namespace App\Http\Controllers;

use App\Societe;
use App\Plateform;
use Illuminate\Http\Request;

class PlateformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platforms = Plateform::all();

        return view('backend.platforms.index', compact('platforms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $constructeurs = Societe::all();
        $platform = new Plateform();
        return view('backend.platforms.create', compact('platform', 'constructeurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|min:2',
            'societe_id' => 'required|integer'
        ]);

        Plateform::create($data);

        return redirect('platforms');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Plateform $platform)
    {   

        $constructeurs = Societe::all();
        
        return view('backend.platforms.show', compact('platform', 'constructeurs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Plateform $platform)
    {
        $constructeurs = Societe::all();
        return view('backend.platforms.edit', compact('platform', 'constructeurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plateform $platform)
    {
        $data = request()->validate([
            'name' => 'required|min:2',
            'societe_id' => 'required|integer'
        ]);

        $platform->update($data);

        return redirect('platforms/'.$platform->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plateform $platform)
    {
        $platform->delete();

        return redirect('platforms');
    }
}
