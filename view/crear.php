<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Coche</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2>Formulario de Coche</h2>
        <form method="post" action="/index.php/crear">
            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" class="form-control" name="marca" id="marca" placeholder="Introduce la marca">
            </div>
            <div class="form-group">
                <label for="modelo">Modelo</label>
                <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Introduce el modelo">
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input type="text" class="form-control" name="color" id="color" placeholder="Introduce el color">
            </div>
            <div class="form-group">
                <label for="propietario">Propietario</label>
                <input type="text" class="form-control" name="propietario" id="propietario" placeholder="Introduce el propietario">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>