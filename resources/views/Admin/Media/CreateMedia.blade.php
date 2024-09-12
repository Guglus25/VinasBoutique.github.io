@extends('layouts.mainVinas')

@section('contenido') 
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Listado de archivos media
                        <a href="{{route('Media.index')}}" class="btn btn-outline-danger btn-sm float-sm-end">Volver</a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('Media.Guardar')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="mb-3">
                                        <label for="FileName" class="form-label">Nombre del archivo</label>
                                        <input type="text" class="form-control" id="FileName" name="FileName">
                                    </div>

                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="mb-3">
                                        <label for="FileType" class="form-label">Tipo de media</label>
                                        <select id="FileType" name="FileType" class="form-select">
                                            <option selected disabled>Seleccione un tipo</option>
                                            <option value="Imagen">Imagen</option>
                                            <option value="Video">Video</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="FilePath" name="FilePath">
                                        <!-- <label class="input-group-text" for="inputGroupFile02">Upload</label> -->
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
    </div>
@endsection