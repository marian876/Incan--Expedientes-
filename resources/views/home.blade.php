@extends('template')
@section('content')

<div class="bg-gray-900 px-20 py-16 rounded-lg mb-8 relative overflow-hidden">
    <span class="text-xs uppercase text-gray-700 bg-gray-400 rounded-full px-2 py-1">Buscador</span>
    <h1 class="text-3xl text-white mt-4">Expedientes clínicos</h1>
    <p class="text-sm text-gray-400 mt-2">Proyecto de digitalización de expedientes</p>

    <img src="{{ asset('images/dev.png') }}"class="absolute -right-20 -bottom-20 opacity-20" >
</div>

@auth

<div class="flex items-center flex-grow gap-4">

    <form action="{{ route('home') }}" class="flex-grow" method="GET">
        <label class="uppercase text-gray-700 text-xs">Número de expediente</label>
        <input type="text" name="search" placeholder="Ingrese el número de cédula aquí" value="{{ request('search') }}" 
        class="border border-gray-200 rounded py-2 px-4 w-1/2"
        >
    </form>
</div>

<div class="px-4">
    <h1 class="text-2xl mb-8 text-gray-900">Listado de expedientes</h1>

    @if ($expedientes!=="")
    <div class="grid grid-cols-1 gap-4 mb-4">
    	@foreach($expedientes as $expediente)
        <a href="{{ route('expediente', $expediente->ubicacion_digital) }}" class="bg-gray-100 rounded-lg px-6 py-4">        
            <p class="text-xs flex items-center gap-2">
                <span class="uppercase text-gray-700 bg-gray-200 rounded-full px-2 py-1">Nro de expediente: </span>
                <span>{{ $expediente->nro_expediente}}</span>
            </p>

            <h2 class="text-lg text-gray-900 mt-2">{{ $expediente->nombre_paciente }}</h2>
            {{-- <p class="uppercase text-blue-700">{{ $expediente->estado_exp }}</p> --}}


        </a>
        @endforeach
    </div>
    {{ $expedientes->links() }}
    @endif

</div>

@endauth
@endsection