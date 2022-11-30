<?php

namespace App\Http\Controllers;
use App\Models\Characters;
use Illuminate\Http\Request;
use App\Http\Requests\CharactersRequest;



class LevelUp extends Controller
{
    public function levelUp(Characters $Character)
    {
      
            $Character = Characters :: post ([

                'pv' => (random_int(0, 15)),
                'magie' => (random_int(0, 15)),
                'force' => (random_int(0, 15)),
                'agility' => (random_int(0, 15)),
                'intelligence' => (random_int(0, 15)),

            ]);
            
            return $Character;




         
    }


}

