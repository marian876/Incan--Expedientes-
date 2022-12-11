<?php

namespace App\Http\Controllers;

use App\Models\Expediente;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ExpedienteController extends Controller
{
    public function index()
    {
        return view('expedientes.index', [
            'expedientes' => Expediente::latest()->paginate()
        ]);
    }

    public function store(Request $request)
    {
        $expediente = $request->user()->expedientes()->create([
            'nro_expediente' => $nro_expediente = $request->nro_expediente,
            'nombre_paciente' => $nombre_paciente = $request->nombre_paciente,
            'id_proceso' => $id_proceso = $request->id_proceso,
            'ruta_original' => $ruta_original = $request->ruta_original,
            'ubicacion_digital' => $ubicacion_digital = $request->ubicacion_digital,
            'ubicacion_fisica' => $ubicacion_fisica = $request->ubicacion_fisica,
            'estado_paciente' => $estado_paciente = $request->estado_paciente,
        ]);

        return redirect()->route('expedientes.edit', $expediente);
    }

    public function edit(Expediente $expediente)
    {
        return view('expedientes.edit', compact('expediente'));
    }

    public function update(Request $request, Expediente $expediente)
    {
        $expediente->update([
            'nro_expediente' => $nro_expediente = $request->nro_expediente,
            'nombre_paciente' => $nombre_paciente = $request->nombre_paciente,
            'id_proceso' => $id_proceso = $request->id_proceso,
            'ruta_original' => $ruta_original = $request->ruta_original,
            'ubicacion_digital' => $ubicacion_digital = $request->ubicacion_digital,
            'ubicacion_fisica' => $ubicacion_fisica = $request->ubicacion_fisica,
            'estado_paciente' => $estado_paciente = $request->estado_paciente,
        ]);

        return redirect()->route('home');
    }

    public function destroy(Expediente $expediente)
    {
        $expediente->delete();

        return redirect()->route('home');
    }
}
