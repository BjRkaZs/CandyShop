<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candy;

class CandyController extends Controller
{
    // public function getCandies(){

    //     $candies = Candy::all();

    //     return response()->json( [ "Candies" => $candies ] );
    // }      

    // public function destroyCandy(){
        
    // }

    public function newCandy(Request $request ){
        $candy = new Candy;
        $candy->name = $request["name"];
        $candy->amount = $request["amount"];
        $candy->type_id = $request["type_id"];

        $candy->save();

        return response()->json([ "Sikeres írás" => $candy ]);
    }
}
