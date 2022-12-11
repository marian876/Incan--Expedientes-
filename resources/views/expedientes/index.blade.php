<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Expedientes') }}
        </h2>
    </x-slot>

    <div class="flex items-center flex-grow gap-4">

        <form action="{{ route('home') }}" class="flex-grow" method="GET">
            <label class="uppercase text-gray-700 text-xs">Número de expediente</label>
            <input type="text" name="search" placeholder="Nro de Expediente" value="{{ request('search') }}" 
            class="border border-gray-200 rounded py-2 px-4 w-1/2"
            >
        </form>
    </div>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                	<table class="mb-4">
                        @foreach($expedientes as $expediente)
                        <tr class="border-b border-gray-200 text-sm">
                            <td class="px-6 py-4">{{ $expediente->nro_expediente }}</td>
                            <td class="px-6 py-4">{{ $expediente->nombre_paciente }}</td>

                            <td class="px-6 py-4">
                                <a href="{{ route('expedientes.edit', $expediente) }}" class="text-indigo-600">Editar</a>
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{ route('expedientes.destroy', $expediente) }}" method="POST">
								    @csrf 
								    @method('DELETE')

								    <input 
								    	type="submit" 
								    	value="Eliminar" 
								    	class=" bg-gray-800 text-white rounded px-4 py-2" 
								    	onclick="return confirm('¿Desea Eliminar?')"
								    >
								</form>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    {{ $expedientes->links() }}
                </div>
            </div>
        </div>
</x-app-layout>
