<?php

namespace App\Http\Controllers;

use App\Game;
use App\Genre;
use App\Societe;
use App\Plateform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GameController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::orderBy('status', 'asc')->get();

        return view('backend.games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $game = new Game;
        
        $genres = Genre::all();
        $editeurs = Societe::all();
        $developpeurs = Societe::all();
        $consoles = Plateform::all();

        return view('backend.games.create', compact('game', 'genres', 'editeurs', 'developpeurs', 'consoles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = Validator::make($request->all(), [
            'title' => 'required|integer|min:5',
            'image' => 'required|file|mimetypes:application/pdf,image/png,image/jpeg|max:4096',
            'genre_id' => 'required|integer',
            'editeur_id' => 'required|integer',
            'dev_id' => 'required|integer',
            'platform_id' => 'required|integer',
            'status' => 'required|integer',
        ]);
            
        Game::create([
            'title' => $request->title,
            'image' => $request->image->store('games', 'public'),
            'genre_id' => $request->genre_id,
            'editeur_id' => $request->editeur_id,
            'dev_id' => $request->dev_id,
            'platform_id' => $request->platform_id,
            'status' => $request->status
        ]);

        return redirect('games');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        $genres = Genre::all();
        $editeurs = Societe::all();
        $devs = Societe::all();
        $platforms = Plateform::all();
        return view('backend.games.show', compact('game', 'genres', 'editeurs', 'devs', 'platforms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        $genres = Genre::all();
        $editeurs = Societe::all();
        $developpeurs = Societe::all();
        $consoles = Plateform::all();

        return view('backend.games.edit', compact('game', 'genres', 'editeurs', 'developpeurs', 'consoles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        $data = Validator::make($request->all(), [
            'title' => 'required|integer|min:5',
            'image' => 'nullable|file|mimetypes:application/pdf,image/png,image/jpeg|max:4096',
            'genre_id' => 'required|integer',
            'editeur_id' => 'required|integer',
            'dev_id' => 'required|integer',
            'platform_id' => 'required|integer',
            'status' => 'required|integer'
        ]);
        
        $game->title = $request->title;
        $game->image = isset($request->image) ? $request->image->store('games', 'public') : $game->image;
        $game->genre_id = $request->genre_id;
        $game->editeur_id = $request->editeur_id;
        $game->dev_id = $request->dev_id;
        $game->platform_id = $request->platform_id;
        $game->status = $request->status;

        if ($game->save()) {    
            return redirect('games/' . $game->id)->with('success', 'Message de succes');
        }

        return redirect('games/' . $game->id)->with('error', 'Message d\'erreur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $game->delete();

        return redirect('backend.games');
    }

    public function add(Game $game){
        auth()->user()->games()->attach($game);
        
        return back();
    }

    public function remove(Game $game){
        auth()->user()->games()->detach($game);
        
        return back();
    }
    

    public function mygame(){
        $myGames = auth()->user()->games;
        #dd($myGames);

        return view('frontend.games.list', compact('myGames'));
    }

}
