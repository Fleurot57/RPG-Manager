<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\characters;
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
        $characters = characters::all();
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
            'user_id' => auth()->id(),
            'pv' => (random_int(0, 15)),
            'magie' => (random_int(0, 15)),
            'force' => (random_int(0, 15)),
            'agility' => (random_int(0, 15)),
            'intelligence' => (random_int(0, 15)),

        ]);

        if($create){

            $characters = characters::all();

            return view('characters')->with(['characters' => $characters]);
            // return redirect()
            //         ->back()
            //         ->with('success', 'Ton personnage a été créé avec succès, tu peux partir à l\'aventure !');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $characters = DB::table('characters')->get('id');


        if (!array_key_exists($id, $characters)) {
            return response('Not found', 404);
        }
        return view('charactersShow')->with([
                      'CharactersInfos' => $characters[$id],
                   ]);;
    }

    // {
    //     if (!array_key_exists($id, static::$pokedex)) {
    //         return response('Not found', 404);
    //     }
    //     return view('pokemon.show')
    //         ->with([
    //             'pokemonName' => $id,
    //             'pokemonData' => static::$pokedex[$id],
    //         ]);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
