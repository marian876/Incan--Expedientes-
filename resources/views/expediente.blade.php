@extends('template')

@section('content')

<div class="max-w-3xl mx-auto">
	<h1 class="text-5xl mb-8">{{ $expediente->nro_expediente }}</h1>
    
    <label class="uppercase text-gray-700 text-xs">Nombre del paciente</label>
    <p class="leading-loose text-lg text-gray-700"> {{$expediente->nombre_paciente}} <br> </p>
    
    <label class="uppercase text-gray-700 text-xs">Estado del expediente</label>
    <p class="leading-loose text-lg text-gray-700"> {{$expediente->estado_exp}} <br> </p>
    
    <label class="uppercase text-gray-700 text-xs">Ubicación física</label>
    <p class="leading-loose text-lg text-gray-700"> {{$expediente->ubicacion_fisica}} <br>  </p>
    
    <label class="uppercase text-gray-700 text-xs">Estado del paciente</label>
    <p class="leading-loose text-lg text-gray-700"> {{$expediente->estado_paciente}} <br> <br> </p>
    
    <label class="uppercase text-gray-700 text-xs">Actualizado en fecha</label>
    <p class="leading-loose text-lg text-gray-700"> {{$expediente->created_at}} <br> </p>
    
    <label class="uppercase text-gray-700 text-xs">Creado en fecha</label>
    <p class="leading-loose text-lg text-gray-700"> {{$expediente->updated_at}} <br> </p>
    
    <label class="uppercase text-gray-700 text-xs">Lote de proceso</label>
    <p class="leading-loose text-lg text-gray-700"> {{$expediente->id_proceso}} <br> <br></p>
    
    <table class="mb-4">
        <tr class="border-b border-gray-200 text-sm">
            <td class="px-6 py-4">
            </td>
            <td class="px-6 py-4">
                <form action="{{ route('expedientes.destroy', $expediente) }}" method="POST">
                    @csrf 
                    @method('DELETE')
                    <x-secondary-button class="ml-3 bg-blue-600">
                        <a href="{{ redirect()->getUrlGenerator()->previous() }}">Volver</a>
                    </x-secondary-button>
                    <x-primary-button class="ml-3">
                        <a href="{{$expediente->ruta_original}}">Ver</a>
                    </x-primary-button>
                    
                    @can('expedientes.edit')
                    <x-primary-button class="ml-3">
                        <a href="{{ route('expedientes.edit', $expediente) }}">Editar</a>
                    </x-primary-button>
                    @endcan
                    @can('expedientes.edit')
                    <x-danger-button class="ml-3">
                    <input type="submit" value="ELIMINAR"  
                        onclick="return confirm('¿Desea Eliminar?')">
                    </x-danger-button>
                    @endcan
                </form>
            </td>
        </tr>
    </table>
</div>

@endsection