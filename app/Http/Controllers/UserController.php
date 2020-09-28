<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Ville;
use App\Dispose;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::all();
        $roles = Role::all();
        $role = auth()->user()->role_id;
        if($role == 1)
        {
            return view('backend.users.index', compact('users', 'roles'));
        }else{
            return view('frontend.home');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $games = Dispose::where('user_id', $user->id);
        $roles = Role::all();
        $villes = Ville::all();

        $role = auth()->user()->role_id;
        if($role == 1)
        {
            return view('backend.users.show', compact('user', 'roles', 'villes'));
        }else
        {
            return view('frontend.users.show', compact('user'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $games = Dispose::where('user_id', auth()->user()->id);
        $roles = Role::all();
        $villes = Ville::all();
        $role = auth()->user()->role_id;
        if($role == 1)
        {
            return view('backend.users.edit', compact('user', 'roles'));
        }else{
            if($user->id == auth()->user()->id){
                return view('frontend.users.edit', compact('user', 'villes'));
            }else{
                return view('frontend.home');
            }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = Validator::make($request->all(),[
            'role_id' => 'integer',
            'ville_id' => 'integer',
            'image' => 'file|mimetypes:application/pdf,image/png,image/jpeg|max:4096'
        ]);
        
        if($request->image == null)
            return redirect('users/'.$user->id.'/edit')->with('message', 'Vous n\'avez pas uploader d\'autre image');
        $user->update([
            'role_id' => $request->role_id,
            'image' => $request->image->store('avatars', 'public'),
            'ville_id' => $request->ville_id,
        ]);
        
        return redirect('users/'.$user->id.'/edit');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect('users');
    }

}
