<?php
require('./Data.php');

if($_POST){
    Files::remove($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de tormentas</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <main class="case">

        <header class="display_container">
            
            <div class="display">
                <header>
                    <h2>Control de tormentas</h2>
                </header>

                <form action="" method="post">

                    <section class="ver remove">
                        <h2>Registro a eliminar:</h2>
                        <select name="name" id="">
                                <?php
                                    Files::publish('select');
                                ?>
                        </select>


                        <button type="submit">Eliminar</button>

                    </section>


                </form>

            </div>

        </header>

        <section class="buttons">

            <div class="col">
                <a href="./index.php" class="button">
                    <span>Registro</span>
                </a>
            </div>

            <div class="col">
                <a href="./editar.php" class="button">
                    <span>Editar</span>
                </a>
            </div>

            <div class="col">
                <a href="./ver.php" class="button">
                    <span>Visualizar</span>
                </a>
            </div>

            <div class="col">
                <a href="./eliminar.php" class="button removing">
                    <span>Eliminar</span>
                </a>
            </div>

        </section>
    </main>
</body>
</html>