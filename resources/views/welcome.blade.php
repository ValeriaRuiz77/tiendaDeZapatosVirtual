@extends('layouts.app')
@section('titulo', 'Mis productos')

@section('contenido')
    <h1>LISTA DE PRODUCTOS</h1>
    <ul>
        @foreach ($productos as $producto)
            {{-- Muestra nombre y precio de cada producto --}}
            <li>{{ $producto->nombre }} - precio: {{ $producto->precio }}</li>
        @endforeach
    </ul>
@endsection
