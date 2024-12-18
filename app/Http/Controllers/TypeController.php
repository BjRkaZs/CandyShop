<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    public function newType(Request $request ){
        $type = new Type;
        $type->type = $request["type"];

        $type->save();

        return response()->json([ "Sikeres írás" => $type ]);
    }
}
