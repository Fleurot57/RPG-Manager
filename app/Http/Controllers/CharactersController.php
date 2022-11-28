<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Characters;
use App\Http\Requests\CharactersRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CharactersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Characters::all();
        return view('characters')->with(['characters' => $characters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('charactersCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


         $create = Characters::create([

            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'classe' => $request->get('classe'),
            'user_id' => Auth::user()->id,
            'pv' => (random_int(0, 15)),
            'magie' => (random_int(0, 15)),
            'force' => (random_int(0, 15)),
            'agility' => (random_int(0, 15)),
            'intelligence' => (random_int(0, 15)),

        ]);

        if($create){

            $characters = Characters::all();

            return view('characters')->with(['characters' => $characters]);
            return redirect()
                     ->back()
                     ->with('success', 'Ton personnage a été créé avec succès, tu peux partir à l\'aventure !');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Characters $character)
    {

        return view('charactersShow')->with(['character' => $character]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     public function edit(characters $character)
    {
        return view('charactersEdit')
        ->with([
            'character' => $character,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CharactersRequest $request, characters $character)
    {
        $character->fill($request->toArray());
        $character->save();

        return redirect()->route('characters.show', $character->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(characters $character)
    {
        $character->delete();

        return redirect()->route('characters.index');
    }
}
