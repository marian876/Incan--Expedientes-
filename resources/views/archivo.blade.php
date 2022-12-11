@extends('template')

@section('content')
<h1>Listado</h1>
@foreach ($expedientes as $expediente)
<p>
    <strong>{{$expediente->nro_expediente}}</strong>
        <a href="{{ route('expediente', $expediente->slug) }}">
            {{$expediente->nombre_paciente}}
        </a>
</p>
@endforeach
{{$expedientes->links()}}
@endsection

