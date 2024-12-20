<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
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
        <h1>Listado de coches</h1>
        <table class="table table-striped border">
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Color</th>
                <th>Propietario</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($rowset as $row): ?>
                <tr>
                    <td><?php echo $row->getMarca(); ?></td>
                    <td><?php echo $row->getModelo(); ?></td>
                    <td><?php echo $row->getColor(); ?></td>
                    <td><?php echo $row->getPropietario(); ?></td>
                    <td>
                        <a class="btn btn-primary" href="./editar/<?php echo $row->getId(); ?>">Editar</a>
                        <a class="btn btn-danger" href="./baja/<?php echo $row->getId(); ?>">Borrar</a>

                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>