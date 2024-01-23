<?php
require('./Data.php');
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

                    <section class="ver">
                        
                        <header>
                            <span>N#</span>
                            <span>Nombre</span>
                            <span>Tipo</span>
                            <span>Categoria</span>
                            <span>Velocidad</span>
                            <span>Fecha inicial</span>
                            <span>Fecha final</span>
                        </header>

                        <?php

                            if(!is_dir('./storage')){
                                echo"<p class='not_found'>No hay registros</p>";
                            }else{
                                Files::publish('list');
                            }

                        ?>

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
                <a href="./ver.php" class="button view">
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