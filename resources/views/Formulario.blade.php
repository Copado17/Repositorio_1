<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Formulario</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Tabla">Tabla</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
   

    <div class="container col-md-4 ">
        <h1 class="display-4 mb-4 text-center">Formulario </h1>
        <div class="card  bg-secondary">
            <div class="card-body  ">
                <h1 class="mb-4  text-center">Ingreso de sueño</h1>
                <form method="post" action="Guardarsueño">
                    @csrf
                    <h6 >Sueño</h6>
                    <div class="col mb-2">
                    
                        <input class="form-control" type="text" placeholder="Nombre del sueños" name="Sueño"
                            aria-label="default input example">

                        @if ($errors->has('Sueño'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{ $errors->first('Sueño') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                            @endif

                        </div>
                        <h6 >Descripcion</h6>
                        <div class="col">
                            <input class="form-control" type="text" placeholder="Descripción del sueño"
                                name="Descripcion" aria-label="default input example">
                            @if ($errors->has('Descripcion'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{ $errors->first('Descripcion') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>

                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card text-center">
                        <button type="submit" class="btn btn-primary">Guardar sueño</button>
                </form>
            </div>
        </div>









        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>
