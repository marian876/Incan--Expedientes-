<?php

namespace App\Http\Controllers;

use App\Models\Expediente;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request)
    {
        $search = $request->search;
        if (!isset($request->search))
            $expedientes = "";
        else
            $expedientes = Expediente::where('nro_expediente', 'LIKE', "%{$search}%")
                ->latest()->paginate();

        return view('home', compact('expedientes'));
    }

    public function expediente(Expediente $expediente)
    {
        return view('expediente', ['expediente' => $expediente]);
    }
}
