<?php 
require_once("alumnos.php");
$obj= new alumnos();
$obj->setninos(25);
$obj->setninas(20);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 2</title>
</head>
<body>
    <br>
    <h4 class="text-center">Porcentaje de alumnos y alumnas</h4>
    <br>
    <div class="container-sm">
      <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
        <thead>
            <tr>
                <th scope="col">Alumnos</th>
                <th scope="col">Alumnas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $obj->pninos(); ?></td>
                <td><?php echo $obj->pninas();?></td>
            </tr>
        </tbody>
      </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>