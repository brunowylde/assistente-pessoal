<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RotinaDiaria extends Controller {
    
    public function get() {
        $rotinas = DB::table('rotinas_diarias')->get();
        return response()->json(['status' => 'success', 'rotinas' => $rotinas], 200);
    }

    public function insert(Request $request) {
        DB::table('rotinas_diarias')->insert([ 'nome' => $request->nome ]);
    }

}
