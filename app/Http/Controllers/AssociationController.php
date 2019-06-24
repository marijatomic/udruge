<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Association;
use App\AssociationMember;
use App\Faculty;
use App\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AssociationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $associations = Association::all();
        foreach ($associations as $index => $association) {
            $years[$index] = new Carbon($association->year);
            $years[$index] = $years[$index]->year;
            $association->year = $years[$index];

        }

        return view('association.index', ['associations' => $associations]);
    }

    public function show($id)
    {
        $association = Association::find($id);
        $year = new Carbon($association->year);
        $association->year = $year->year;
        $members = AssociationMember::where('association_id', '=', $association->id)->get();
        $activities=Activity::where('association_id','=',$association->id)->get();
        return view('association.show', array('association' => $association, 'members' => $members, 'activities'=>$activities));
    }

    public function create()
    {
        $faculties = Faculty::all();
        $users = User::all();
        return view('association.create', ['faculties' => $faculties], ['users' => $users]);
    }

    public function store(Request $request)
    {
        $association = new Association();
        $association->fill($request->all());
        $association->save();

        $member = new AssociationMember();
        $member->user_id = $request->president_id;
        $member->association_id =$association->id;
        $member->save();


        return redirect('/associations')->with('success', 'Studij kreiran.');
    }

    public function edit($id)
    {

        $association = Association::find($id);

        $this->authorize('update', $association);

        $faculties = Faculty::all();
        $users = User::all();

        return view('association.edit', array('association' => $association, 'faculties' => $faculties, 'users' => $users));

    }


    public function update(Request $request, $id)
    {
        $association = Association::find($id);
        $association->fill($request->all());
        $association->save();

        return redirect('/associations')->with('success', 'Podatci azurirani.');
    }

    public function destroy($id)
    {
        $association = Association::find($id);

        $association->delete();

        return redirect('/associations')->with('danger', 'Izbrisano.');
    }
}
