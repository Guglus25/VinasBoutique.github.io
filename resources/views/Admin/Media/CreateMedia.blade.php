<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Listado de archivos media
                        <a href="{{route('Media.index')}}" class="btn btn-outline-danger btn-sm float-sm-end">Volver</a>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="mb-3">
                                        <label for="FileName"  class="form-label">Email address</label>
                                        <input type="text" class="form-control" id="FileName" name="FileName">
                                    </div>


                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="FileName" name="FileName">
                                        <label for="FileName">Nombre del archivo</label>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="FileType" name="FileType">
                                            <option selected disabled>Seleccione un tipo</option>
                                            <option value="Imagen">Imagen</option>
                                            <option value="Video">Video</option>
                                        </select>
                                        <label for="FileType">Tipo de media</label>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="FilePath" name="FilePath">
                                        <label for="FilePath">Ruta del archivo</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>