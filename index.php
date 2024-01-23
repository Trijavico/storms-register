<?php
/* 2021-2162
Javier Peña Perez */

require('./data.php');

if($_POST){
    Files::save($_POST);
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

                    <section class="entry">

                        <div class="col">
                            <div class="row">
                                <label for="name">Nombre:</label>
                                <input type="text" name="nombre" id="name" required>
                            </div>

                            <div class="row">
                                <label for="category">Categoria:</label>
                                <input type="number" name="categoria" id="category" required>
                            </div>

                            <div class="row">
                                <label for="speed">Velocidad:</label>
                                <input type="number" name="velocidad" id="speed" required>
                            </div>


                        </div>


                        <div class="col">

                            <div class="row">
                                <label for="Idate">Fecha inicial:</label>
                                <input type="date" name="fechaInicial" id="Idate" required>
                            </div>

                            <div class="row">
                                <label for="Fdate">Fecha final:</label>
                                <input type="date" name="fechaFinal" id="Fdate" required>
                            </div>

                            <div class="row">
                                <header class="radio_header">
                                    <label>Tipo:</label>
                                </header>
                                <label>Tormenta</label>
                                <input type="radio" name="tipo" value="tormenta" required>
                                <label>Huracan</label>
                                <input type="radio" name="tipo" value="huracan" required>
                            </div>

                        </div>

                        <button type="submit">Enviar</button>

                    </section>

                </form>


            </div>

        </header>

        <section class="buttons">

            <div class="col">
                <a href="./index.php" class="button index">
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
                <a href="./eliminar.php" class="button">
                    <span>Eliminar</span>
                </a>
            </div>

        </section>
    </main>



</body>
</html>