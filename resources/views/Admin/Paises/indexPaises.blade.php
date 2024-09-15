@extends('layouts.mainVinas')

@section('contenido') 


<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                Listado de paises
                <button class="btn btn-outline-success btn-sm float-sm-end" data-bs-toggle="modal"
                    data-bs-target="#ModalPaises">Nuevo
                    Pais</button>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>

                @endif

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Orden</th>
                            <th scope="col">Nombre del pais</th>
                            <th style="width:300px" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($paises as $pais)
                            <tr>
                                <td>
                                    {{$pais->Order}}
                                </td>
                                <td>
                                    {{$pais->Name}}
                                </td>
                                <td>
                                    <a href="" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#ModalLocalidades">Localidades</a>

                                    <a href="javascript:document.getElementById('media-{{$pais->id}}').submit()"
                                        class="btn btn-outline-danger btn-sm">Eliminar</a>
                                    <form id="media-{{$pais->id}}" action="{{route('Pais.Eliminar', $pais->id)}}"
                                        method="POST">
                                        @method('delete')
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Modal insertar paises -->
<div class="modal fade" id="ModalPaises" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo pais</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('Pais.Guardar')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-4 col-lg-4">
                            <div class="mb-3">
                                <label for="Order" class="form-label">Orden</label>
                                <input type="text" class="form-control" id="Order" name="Order">
                            </div>

                        </div>
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                                <label for="Name" class="form-label">Nombre del archivo</label>
                                <input type="text" class="form-control" id="Name" name="Name">
                            </div>

                        </div>
                        <div class="col-md-12 col-lg-12">
                            <button type="submit" class="btn btn-outline-primary btn-md">Guardar</button>

                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>



<!-- Modal Localidades -->
<div class="modal fade" id="ModalLocalidades" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Localidades del pais </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('Pais.Guardar')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-4 col-lg-4">
                            <div class="mb-3">
                                <label for="Order" class="form-label">Orden</label>
                                <input type="text" class="form-control" id="Order" name="Order">
                            </div>

                        </div>
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                                <label for="Name" class="form-label">Nombre del archivo</label>
                                <input type="text" class="form-control" id="Name" name="Name">
                            </div>

                        </div>
                        <div class="col-md-12 col-lg-12">
                            <button type="submit" class="btn btn-outline-primary btn-md">Guardar</button>

                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection