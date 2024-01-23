<?php

require('./data.php');

$nameTarget = array();

if($_POST){

    if(array_key_exists('target', $_POST)){

        $file = json_decode(file_get_contents('./storage/data.json'), true);
        $nameTarget = $file[$_POST['target']];

    }else{
        Files::save($_POST);
    }

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

                    <div class="select_container">
                        <form action="" method="post">
                            <h4>Registro a editar</h4>
                            <select class='select' name="target">
                                <?php
                                    Files::publish('select');
                                ?>
                            </select>
                            <button type="submit">Insertar</button>
                        </form>
                    </div>
                </header>

                <form action="" method="post">

                    <section class="edit entry">

                        <div class="col">
                            <div class="row">
                                <label for="name">Nombre:</label>
                                <input type="text" name="nombre" id="name" 
                                <?php 
                                if(array_key_exists('nombre', $nameTarget)) { echo"value='{$nameTarget['nombre']}'"; } 
                                ?> required>
                            </div>

                            <div class="row">
                                <label for="category">Categoria:</label>
                                <input type="number" name="categoria" id="category" <?php if(array_key_exists('nombre', $nameTarget)) { echo"value='{$nameTarget['categoria']}'"; } ?> required>
                            </div>

                            <div class="row">
                                <label for="speed">Velocidad:</label>
                                <input type="number" name="velocidad" id="speed" <?php if(array_key_exists('nombre', $nameTarget)) { echo"value='{$nameTarget['velocidad']}'"; } ?> required>
                            </div>
                        </div>


                        <div class="col">

                            <div class="row">
                                <label for="Idate">Fecha inicial:</label>
                                <input type="date" name="fechaInicial" id="Idate" <?php if(array_key_exists('nombre', $nameTarget)) { echo"value='{$nameTarget['fechaInicial']}'"; } ?> required>
                            </div>

                            <div class="row">
                                <label for="Fdate">Fecha final:</label>
                                <input type="date" name="fechaFinal" id="Fdate" <?php if(array_key_exists('nombre', $nameTarget)) { echo"value='{$nameTarget['fechaFinal']}'"; } ?> required>
                            </div>

                            <div class="row">
                                <header class="radio_header">
                                    <label>Tipo:</label>
                                </header>

                                <label>Tormenta</label>
                                <input type="radio" name="tipo" value="tormenta" <?php 
                                
                                    if(array_key_exists('nombre', $nameTarget)) { 
                                        if($nameTarget['tipo'] === 'tormenta'){
                                            echo"checked";
                                        } 
                                    } 
                                
                                ?> required>

                                <label>Huracan</label>
                                <input type="radio" name="tipo" value="huracan" <?php 
                                
                                    if(array_key_exists('nombre', $nameTarget)) { 
                                        if($nameTarget['tipo'] === 'huracan'){
                                            echo"checked";
                                        } 
                                    } 
                            
                                ?> required>
                            </div>

                        </div>

                        <button type="submit">Editar</button>
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
                <a href="./editar.php" class="button edition">
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