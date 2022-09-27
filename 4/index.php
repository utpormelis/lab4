<?php 
require_once("cifrado.php"); 
$obj=new cifrado();
$obj->setpass("hola");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 4</title>
</head>
<body>
<br>


<br>
<br>
<h2 class="text-center">Cifrado de texto</h2>
<br>

    <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
        <thead>
            <tr>
                <th scope="col">Contraseña a cifrar</th>
                <th scope="col">Esto se va a cifrar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Rand</td>
                <td><?php echo $obj->cif(); ?></td>
            </tr>
            <tr>
                <td>Base64_encode</td>
                <td><?php echo $obj->cif1(); ?></td>
            </tr>
            <tr>
                <td>Md5</td>
                <td><?php echo $obj->cif2(); ?></td>
            </tr>
            <tr>
                <td>Sha1</td>
                <td><?php echo $obj->cif3(); ?></td>
            </tr>
            <tr>
                <td>Crc32</td>
                <td><?php echo $obj->cif4(); ?></td>
            </tr>
            <tr>
                <td>Crypt</td>
                <td><?php echo $obj->cif5(); ?></td>
            </tr>
            <tr>
                <td>hash_sha224</td>
                <td><?php echo $obj->cif6(); ?></td>
            </tr>
            <tr>
                <td>hash_sha512</td>
                <td><?php echo $obj->cif7(); ?></td>
            </tr>
            <tr>
                <td>hash_whirlpool</td>
                <td><?php echo $obj->cif8(); ?></td>
            </tr>
            <tr>
                <td>hash_snefru</td>
                <td><?php echo $obj->cif9() ?></td>
            </tr>
            <tr>
                <td>hash_haval128,3</td>
                <td><?php echo $obj->cif10() ?></td>
            </tr>
            <tr>
                <td>hash_haval128,5</td>
                <td><?php echo $obj->cif11() ?></td>
            </tr>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>