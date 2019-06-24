<?php

namespace App\Http\Controllers;

use App\Association;
use App\AssociationMember;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AssociationMemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create($id)
    {
        $association = Association::find($id);

        $this->authorize('update', $association);

        $users=User::whereNotExists(function($query) use ($id)
        {
            $query->select('*')
                ->from('association_members')
                ->whereRaw('users.id = association_members.user_id')->where('association_id','=',$id);
        })->get();

        $members=AssociationMember::where('association_id','=',$id)->get();


        return view('associationMember.create', array('users' => $users,'association' => $association, 'members'=>$members));
    }

    public function store(Request $request, $id)
    {
        $member = new AssociationMember();
        $member->user_id = $request->user_id;
        $member->association_id = $id;
        $member->save();

        return Redirect::back();

    }

    public function destroy(Request $request,$id)
    {
        $member = AssociationMember::where('association_id','=',$id)->where('user_id','=',$request->user_id)->first();

        $member->delete();

        return Redirect::back();
    }
}
