<?php
include('./Controller/listaPokemon.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>

<body>
    <form action="../Ejemplo1/descripcion.php" method="get">
        <center>
            <br>
            <h3>POKEDEX</h3>

            <div class="btn-group">
                <input type="text" name="nombre" id="pokemon" class="form-control">
                <button class="btn btn-dark" id="buscar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </div>

            <br>
            <br>
            <br>


        </center>
    </form>

    <?php
    $pokemos = get_pokemons();
    //var_dump($pokemos);
    foreach (($pokemos['pokemon_entries']) as $k => $v) {
        //echo '<center>'.$v['pokemon_species']['name'].'</center>';
        if ($v['entry_number'] < 10) {
            $img = "00" . $v['entry_number'];
        }
        if ($v['entry_number']  < 100 && $v['entry_number']  >= 10) {
            $img = "0" . $v['entry_number'];
        }

        if ($v['entry_number']  <= 151 && $v['entry_number']  >= 100) {
            $img = $v['entry_number'];
        }
    ?>

        <?php
        echo '<div class="btn-group" onClick="redirect(' . "'" . $v['pokemon_species']['name'] . "'" . ')">';
        ?>

        <!--Obtener la imagen del pokemon -->
        <div class="card" style="width: 18rem;">
            <?php
            echo '<img src="../EJEMPLO1/pokemon/' . $img . '.png" class="card-img-top" width="500">'
            ?>
            <p class="card-text">
                <?php
                echo '<center>' . $v['pokemon_species']['name'] . '</center>';
                ?></p>
        </div>

        </div>
    <?php
    }
    ?>
</body>

<script>
    function redirect(name) {
        document.location.href = './descripcion.php?nombre=' + name;
    }
</script>

</html>