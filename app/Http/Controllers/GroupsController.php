<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use Illuminate\Http\Request;
use App\Http\Requests\GroupsRequest;
use Illuminate\Support\Facades\Auth;
use PHPUnit\TextUI\XmlConfiguration\Group;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Groups::all();
        return view('Groups.groups')->with(['groups' => $groups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groups.groupsCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = Groups::create([

            'user_id' => Auth::user()->id,
            'name' => $request->input('name'),
            'number' => $request->get('number'),
            'description' => $request->input('description'),
            
            
            
        ]);

        if($create) {

            $groups = Groups::all();

            return redirect()->route('groups.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(groups $group)
    {
        return view('Groups.groupsShow')->with(['group' => $group]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(groups $group)
    {
        return view('Groups.groupsEdit')
        ->with([
            'group' => $group,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GroupsRequest $request, groups $group)
    {
        $group->fill($request->toArray());
        $group->save();

        return redirect()->route('groups.show', $group->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Groups $group)
    {
        if(auth()->user()->id == $group->user_id) {
            $group->delete();
        }

        return redirect()->route('groups.index');
    }
}
