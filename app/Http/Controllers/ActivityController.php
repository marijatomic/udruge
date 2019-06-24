<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Association;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $activities = Activity::all();

        return view('activity.index', ['activities' => $activities]);
    }

    public function show($id)
    {
        $activity = Activity::find($id);
        return view('activity.show', ['activity' => $activity]);
    }

    public function create($id)
    {
        $association = Association::find($id);
        return view('activity.create', ['association' => $association]);
    }

    public function store(Request $request, $id)
    {
        $activity = new Activity();
        $activity->name=$request->name;
        $activity->description=$request->description;
        $activity->start_date=$request->start_date;
        $activity->end_date=$request->end_date;
        $activity->association_id = $id;
        $activity->save();

        return redirect('/activities')->with('success', 'Studij kreiran.');
    }

    public function edit($id)
    {
        $activity = Activity::find($id);

        $this->authorize('update', $activity);

        $associations = Association::all();

        return view('activity.edit', array('activity' => $activity, 'associations' => $associations));

    }


    public function update(Request $request, $id)
    {
        $activity = Activity::find($id);
        $activity->fill($request->all());
        $activity->save();

        return redirect('/activities')->with('success', 'Podatci azurirani.');
    }

    public function destroy($id)
    {
        $activity = Activity::find($id);

        $activity->delete();

        return redirect('/activities')->with('danger', 'Izbrisano.');
    }
}
