<?php

namespace App\Http\Controllers;

use App\AssociationMember;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }

    public function show($id)
    {
        $user = User::find($id);
        $members = AssociationMember::where('user_id', '=', $user->id)->get();

        return view('user.show', ['user' => $user, 'members' => $members]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->fill($request->except('password'));
        $user->password = bcrypt($request['password']);
        $user->save();
        return redirect('/users')->with('success', 'Korisnik kreiran.');
    }


    public function edit($id)
    {

        $user = User::find($id);

        $this->authorize('update', $user);


        return view("user.edit", ['user' => $user]);


    }

    public function update(Request $request, $id)
    {

        $user = User::find($id);

        if ($request->filled('password')) {
            $user->fill(array_filter($request->except('password'), 'strlen'));
            $user->password = bcrypt($request['password']);
        } else {
            $user->fill(array_filter($request->all(), 'strlen'));
        }
        $user->save();

        return redirect('/users')->with('success', 'Podaci korisnika ažurirani.');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/users')->with('danger', 'Izbrisano');
    }
}
