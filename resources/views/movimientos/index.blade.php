@extends('layouts.plantilla')

@section('title', 'Historial Compras')

@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead class="table-dark">
                        ...
                    </thead>
                    <tbody>
                        ...
                    </tbody>
                </table>
            </div>

            <div class="container-md col-6 col-md-4 mt-5 rounded-3">
                <div class="row m-2 mb-5">

                    <h1>Movimientos</h1>
                    <form action="{{url('/movimientos')}}" method="post">
                        @csrf
                        <div class="">
                            <input id="valorMovimientosFinancieros" type="text" class="form-control"
                                name="valorMovimientosFinancieros" placeholder="Ingresa el Monto" aria-label="First name">
                        </div>

                        <div class="mt-2">
                            <select id="tipoMovimientosFinancieros" class="form-select" name="tipoMovimientosFinancieros"
                                aria-label="Default select example">
                                <option selected>Selecciona forma de pago</option>
                                <option value="1">Débito</option>
                                <option value="2">Crédito</option>
                                <option value="3">Efectivo</option>
                            </select>
                        </div>

                        <div class="mt-2">
                            <select id="detalleMovimientosFinancieros" class="form-select"
                                name="detalleMovimientosFinancieros" aria-label="Default select example">
                                <option selected>Selecciona Detalle de Movimiento</option>
                                <option value="1">Alimentos</option>
                                <option value="2">Ocio</option>
                                <option value="3">Gastos del hogar</option>
                                <option value="4">Deudas</option>
                                <option value="5">Medico</option>
                                <option value="6">Combustible</option>
                            </select>
                        </div>

                        <div class="mt-2">
                            <select id="indispensableMovimientosFinancieros" class="form-select"
                                name="indispensableMovimientosFinancieros" aria-label="Default select example">
                                <option selected>¿Es Indispensable?</option>
                                <option value="0">No</option>
                                <option value="1">Si</option>
                            </select>
                        </div>

                        

                        <div class="mt-2">
                            <button type="submit" class="btn btn-dark">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection