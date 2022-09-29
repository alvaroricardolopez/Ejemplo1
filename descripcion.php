<?php
include('./Controller/consultaPokemon.php');
include('./Controller/datosPokemon.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descripcion</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    $pokemon = get_consulta();
    $datospokemon = descrip();
    ?>
    <center>
        <br>
        <br>
        <button class="btn btn-dark" id="back" href="./index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-square-fill" viewBox="0 0 16 16">
                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm10.5 10V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4A.5.5 0 0 0 10.5 12z" />
            </svg></button>
        <br>
        <br>

        <h3>NOMBRE</h3>
        <!--Obtener el nombre del pokemon -->
        <p class="text-uppercase">
            <?php
            echo '<center>' . $pokemon['name'] . '</center>';
            ?></p>

        <div>

            <br>
            <!--Obtener la imagen del pokemon -->
            <div class="card" style="width: 18rem;">
                <?php
                echo '<center><img src="' . $pokemon['sprites']['front_default'] . '" width="200"></center>';
                ?>
            </div>

            <br>
            <!--Obtener la descripcion del pokemon -->
            <div class="card" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">DESCRIPCIÓN</h5>
                    <?php
                    foreach (($datospokemon['flavor_text_entries']) as $k => $v) {
                        if ($v['language']['name'] == 'es') {
                            //echo '<center>'.$v['flavor_text'].'</center>';
                            //}
                    ?>
                            <p class="card-text" name="descrip">
                                <?php
                                    echo $v['flavor_text'];
                                ?>
                            </p>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <br>
            <!--Obtener las habilidades del pokemon -->
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">HABILIDADES</h5>
                    <?php
                    foreach (($pokemon['abilities']) as $k => $v) {
                        //echo $v['ability']['name'].'<br/>';
                    ?>
                        <p class="card-text" name="">
                            <?php
                                echo $v['ability']['name'] . '<br/>';
                            ?>
                        </p>
                    <?php
                    }
                    ?>
                </div>
            </div>

        </div>
    </center>
</body>

<script>
    var btn = document.getElementById('back');
    btn.addEventListener('click', function() {
        document.location.href = './index.php';
    });
</script>

</html>