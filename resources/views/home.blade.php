@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row justify-content-center">    
    <div class="col-md-8">
        <h1 class="mb-4">Administracion</h1>
        @if(count($sucursales)===0)
        <h2>Actualmente no cuenta con ningun registro</h2>
        
        @else
            @foreach($sucursales as $sucursal)
            <div class="card mb-4">
                <div class="card-header">
                    {{$sucursal->id}}.
                    {{$sucursal->nombre_sucursal}}
                </div>

                <div class="card-body">
                    <h5>Numero total de empleados</h5>
                    <p>{{$sucursal->empleados->count()}}</p> 
                </div>
                
                <a href="{{url('/sucursales/'.$sucursal->id.'/edit')}}" class="btn btn-primary">
                    Edit sucursal
                </a>
                </div>
                @endforeach
            @endif
            </div>
        </div>
</div>
@endsection
