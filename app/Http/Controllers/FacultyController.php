<?php

namespace App\Http\Controllers;

use App\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $faculties = Faculty::all();
        return view('faculty.index', ['faculties' => $faculties]);
    }

    public function show($id)
    {
        $faculty = Faculty::find($id);
        return view('faculty.show', ['faculty' => $faculty]);
    }

    public function create()
    {

        return view('faculty.create');
    }


    public function store(Request $request)
    {
        $faculty = new Faculty();
        $faculty->fill($request->all());
        $faculty->save();
        return redirect('/faculties')->with('success', 'Kreirano');
    }

    public function edit($id)
    {
        $faculty = Faculty::find($id);

        return view('faculty.edit', array('faculty' => $faculty));
    }


    public function update(Request $request, $id)
    {
        $faculties = Faculty::find($id);
        $faculties->fill($request->all());
        $faculties->save();

        return redirect('/faculties')->with('warning', 'Ažurirano.');
    }

    public function destroy($id)
    {
        $faculty = Faculty::find($id);

        $faculty->delete();

        return redirect('/faculties')->with('danger', 'Izbrisano.');
    }
}
