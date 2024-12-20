<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Listado de Coches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        th {
            width: 8rem;
            text-align: left;
            border-bottom: 1px solid black;
        }

        td {
            width: 8rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Ejemplo 5: Listado de coches</h1>
        <table>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Color</th>
                <th>Propietario</th>
                <th>Acciones</th>
            </tr>



            <tr>

                <td><?php echo $coche->getMarca(); ?></td>
                <td><?php echo $coche->getModelo(); ?></td>
                <td><?php echo $coche->getColor(); ?></td>
                <td><?php echo $coche->getPropietario(); ?></td>
                <td><a class="btn btn-primary" href="/index.php/editar/<?= $coche->getId; ?>">Editar</a>
                    <a class="btn btn-danger" href="/index.php/baja/<?= $coche->getId; ?>">Borrar</a>
                </td>
            </tr>

        </table>
    </div>
</body>

</html>