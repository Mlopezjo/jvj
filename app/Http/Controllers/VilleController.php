<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ville;
use App\User;

class villeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villes = Ville::all();

        return view('villes.index', compact('villes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ville = new Ville();
        return view('villes.create', compact('ville'));
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
            'zip' => 'required|integer|min:5',
            'name' => 'required|min:5',
        ]);

        Ville::create($data);

        return redirect('villes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ville $ville)
    {   

        $users = User::where('ville_id', $ville->id)->get();
        
        return view('villes.show', compact('ville', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ville $ville)
    {
        return view('villes.edit', compact('ville'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ville $ville)
    {
        $data = request()->validate([
            'name' => 'required|min:5',
        ]);

        $ville->update($data);

        return redirect('villes/'.$ville->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ville $ville)
    {
        $ville->delete();

        return redirect('villes');
    }
}
