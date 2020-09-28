<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Societe;

class SocieteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $societes = Societe::all();

        return view('backend.societes.index', compact('societes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $societe = new Societe();
        return view('backend.societes.create', compact('societe'));
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
        ]);

        Societe::create($data);

        return redirect('societes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Societe $societe)
    {   

        //$users = User::where('role_id', $role->id)->get();
        
        return view('backend.societes.show', compact('societe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Societe $societe)
    {
        return view('backend.societes.edit', compact('societe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Societe $societe)
    {
        $data = request()->validate([
            'name' => 'required|min:2',
        ]);

        $societe->update($data);

        return redirect('societes/'.$societe->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Societe $societe)
    {
        $societe->delete();

        return redirect('societes');
    }
}
