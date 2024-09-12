@extends('layouts.mainVinas')

@section('contenido') 

    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Listado de archivos media
                        <a href="{{route('Media.Create')}}" class="btn btn-outline-success btn-sm float-sm-end">Nuevo
                            archivo</a>
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
                                    <th scope="col">Nombre del archivo</th>
                                    <th scope="col">Tipo de archivo</th>
                                    <th scope="col">Ruta del archivo</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($medias as $media)
                                    <tr>
                                        <td>
                                            {{$media->FileName}}
                                        </td>
                                        <td>
                                            {{$media->FileType}}
                                        </td>
                                        <td>
                                            {{$media->FilePath}}
                                        </td>
                                        <td>
                                            <a href="javascript:document.getElementById('media-{{$media->id}}').submit()" class="btn btn-outline-danger tbn-sm">Eliminar</a>
                                            <form id="media-{{$media->id}}" action="{{route('Media.Eliminar',$media->id)}}" method="POST">
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
    </div>
    @endsection