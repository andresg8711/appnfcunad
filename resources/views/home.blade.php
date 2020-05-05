@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Impresiones</div>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Impresion</th>
                        <th scope="col">Hojas</th>
                        <th scope="col">Documento</th>
                        <th scope="col">Impresora</th>
                        <th scope="col">Empleado</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Area</th>
                        </tr>
                    </thead>
                @foreach($impresiones as $impresion)
                    <tbody>
                        <tr>
                        <th scope="row">{{$impresion->id}}</th>
                        <td>{{$impresion->impresion}}</td>
                        <td>{{$impresion->hojas}}</td>
                        <td>{{$impresion->nomDocumento}}</td>
                        <td>{{$impresion->impresora->nomImpresora}}</td>
                        <td>{{$impresion->empleado->nombre.' '.$impresion->empleado->apellido}}</td>
                        <td>{{$impresion->empleado->cargo->nomCargo}}</td>
                        <td>{{$impresion->empleado->area->nomArea}}</td>
                        </tr>
                    </tbody>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
