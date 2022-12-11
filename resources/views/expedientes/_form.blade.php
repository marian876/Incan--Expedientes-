@csrf

<label class="uppercase text-gray-700 text-xs">Número de expediente</label>
<input type="text" name="nro_expediente" class="rounded border-gray-200 w-full mb-4"  value="{{ $expediente->nro_expediente }}">

<label class="uppercase text-gray-700 text-xs">Nombre del paciente</label>
<textarea name="nombre_paciente" class="rounded border-gray-200 w-full mb-4" rows="5">{{ $expediente->nombre_paciente }}</textarea> 

<label class="uppercase text-gray-700 text-xs">Lote de proceso</label>
<textarea name="id_proceso" class="rounded border-gray-200 w-full mb-4" rows="5">{{ $expediente->id_proceso }}</textarea> 

<label class="uppercase text-gray-700 text-xs">Ubicación digital</label>
<textarea name="ubicacion_digital" class="rounded border-gray-200 w-full mb-4" rows="5">{{ $expediente->ubicacion_digital }}</textarea> 

<label class="uppercase text-gray-700 text-xs">Ubicación física</label>
<textarea name="ubicacion_fisica" class="rounded border-gray-200 w-full mb-4" rows="5">{{ $expediente->ubicacion_fisica }}</textarea> 

<label class="uppercase text-gray-700 text-xs">Estado del paciente</label>
<textarea name="estado_paciente" class="rounded border-gray-200 w-full mb-4" rows="5">{{ $expediente->estado_paciente }}</textarea> 

<div class="flex justify-between items-center">
    <a href="{{ route('expedientes.index') }}" class="text-indigo-600">Volver</a>

    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>