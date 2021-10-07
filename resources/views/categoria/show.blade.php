@extends('layouts.app')

@section('navegacion')
    @include('ui.categori_nav')
@endsection



@section('content')

    <div class="my-10 bg-gray-100 p-10 shadow">
        <h1 class="text-3xl text-gray-700 m-0">
            <span class="font-bold">Vacantes</span>
        </h1>

        @include('ui.listadoVacntes') 

    </div>



@endsection
