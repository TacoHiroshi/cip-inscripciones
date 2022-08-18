<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Modulo III | Inscripciones CIP PUNO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
<script src="{{asset('js/main.js')}}"></script>

<div class="container-fluid position-relative d-flex p-0 p-2">

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <!-- Spinner End -->
    <!-- Form Start -->
    <div class="container pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-sm-12 col-xl-8">
                <div class="bg-secondary rounded h-100 p-4">
                    <h3 class="mb-4 text-center">Inscripciones - MODULO III</h3>

                    <form action="{{route('asistentes.store')}}" method="POST">

                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <label for="inputEmail3" class="col-sm-12 col-form-label">Apellido Paterno</label>
                                <input type="text" class="form-control" name="ap_paterno" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="inputEmail3" class="col-sm-12 col-form-label">Apellido Materno</label>
                                <input type="text" class="form-control" name="ap_materno" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <label for="inputEmail3" class="col-sm-6 col-form-label">Nombre Completo</label>
                                <input type="text" class="form-control" name="nombre" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4">
                                <label for="inputEmail3" class="col-sm-12 col-form-label">Nro. de DNI</label>
                                <input type="text" class="form-control" name="nro_dni"required>
                            </div>
                            <div class="col-sm-4">
                                <label for="inputEmail3" class="col-sm-12 col-form-label">Fecha de Nacimiento</label>
                                <input type="date" id="start" name="fecha_nac"
                                       value="2018-07-22"
                                       min="2018-01-01" max="2018-12-31"required>
                            </div>
                            <div class="col-sm-4">
                                <label for="inputEmail3" class="col-sm-12 col-form-label">Sexo</label>
                                <select class="form-select mb-3" aria-label="Default select example" name="sexo" required>
                                    <option selected>Seleccione</option>
                                    <option value="1">Masculino</option>
                                    <option value="2">Femenino</option>
                                    <option value="3">Prefiero no decirlo</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <label for="inputEmail3" class="col-sm-12 col-form-label">Lugar de Nacimiento</label>
                                <input type="text" class="form-control" name="lug_nacimiento" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="inputEmail3" class="col-sm-12 col-form-label">Ubicacion Actual</label>
                                <input type="text" class="form-control" name="ubicacion_actual" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-7">
                                <label for="inputEmail3" class="col-sm-12 col-form-label">Centro Laboral Actual</label>
                                <input type="text" class="form-control" name="cent_lab_actual" required>
                            </div>
                            <div class="col-sm-5">
                                <label for="inputEmail3" class="col-sm-12 col-form-label">Cargo Actual</label>
                                <input type="text" class="form-control" name="cargo_actual" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4">
                                <label for="inputEmail3" class="col-sm-12 col-form-label">Grado Academico</label>
                                <select class="form-select mb-3" aria-label="Default select example" name="grado_academico" required>
                                    <option selected>-</option>
                                    <option value="1">Doctor</option>
                                    <option value="2">Maestro</option>
                                    <option value="3">Bachiller</option>
                                    <option value="4">Pregrado</option>
                                    <option value="5">Tecnico</option>
                                </select>
                            </div>
                            <div class="col-sm-8">
                                <label for="inputEmail3" class="col-sm-12 col-form-label">Profesion</label>
                                <input type="text" class="form-control" name="profesion" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <label for="inputEmail3" class="col-sm-12 col-form-label">Correo Electronico</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="inputEmail3" class="col-sm-12 col-form-label">Numero de Celular</label>
                                <input type="number" class="form-control" name="num_celular" required>
                            </div>
                        </div>
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-6 pt-0">Usted es Agremiado del Colegio de Ingenieros del Peru?</legend>
                            <div class="col-sm-4">
                                <div class="container">

                                    <label class="radio-inline form-check-label">
                                        <input class="form-check-input" type="radio" name="agremiado" value="1" checked required>Si
                                    </label>

                                    <label class="radio-inline form-check-label">
                                        <input class="form-check-input" type="radio" name="agremiado" value="2" required >No
                                    </label>




                                </div>
                            </div>
                        </fieldset>
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <label for="inputEmail3" class="col-sm-12 col-form-label">Numero de Colegiatura (Solo si corresponde)</label>
                                <input type="number" class="form-control" name="nro_colegiatura" required>
                            </div>
                        </div>
                        <div class="row mt-6">
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary">Inscribirme Ahora!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->
    <!-- Content End -->
    <!-- Back to Top -->
</div>

<div class="container-fluid">
        <div class="bg-secondary rounded-top p-4">
            <div class="row">
                <div class="col-12 col-sm-6 text-center text-sm-start">
                    <a href="#"> Capitulo de Ingenieros Industriales y de Sistemas </a> 
                </div>
                <div class="col-12 col-sm-6 text-center text-sm-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    CIP PUNO 
                </div>
            </div>
        </div>
    </div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<!-- Template Javascript -->


</body>

</html>
