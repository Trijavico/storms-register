<?php
/* 2021-2162
Javier Peña Perez */


class Files{

    public static function save($post){
        if(!is_dir('./storage')){
            mkdir('./storage');
            $file = new ArrayObject();
            $json = json_encode($file);
            file_put_contents('./storage/data.json', $json);
        }

        $file = json_decode(file_get_contents('./storage/data.json'), true);
        
        $file[$post['nombre']] = $post;
        
        unset($file['']);

        $json = json_encode($file);
        file_put_contents('./storage/data.json', $json);
        echo "<script>alert('Se han guardado los datos')</script>";
        $_POST = array();
    }


    public static function remove($target){

        if(array_key_exists('name', $target)){
            $file = json_decode(file_get_contents('./storage/data.json'), true);
            unset($file[$target['name']]);

            $json = json_encode($file);
            file_put_contents('./storage/data.json', $json);
            echo "<script>alert('Se han elimando los datos')</script>";
            $_POST = array();

        }

    }


    public static function publish($target){

        $file = json_decode(file_get_contents('./storage/data.json'), true);
        $arr = array();
        $ax = 1;

        foreach ($file as $key => $value) {
            array_push($arr, $key);
        }

        if($target === 'select'){
            for ($i=0; $i < count($file); $i++) { 
                echo "
                    <option value='{$file[$arr[$i]]['nombre']}'> {$file[$arr[$i]]['nombre']} </option>
                ";
            }
        }

        if($target === 'list'){
            for ($i=0; $i < count($file); $i++) { 
                echo "
                    <div class='row'>
                        <span>{$ax}</span>
                        <span>{$file[$arr[$i]]['nombre']}</span>
                        <span>{$file[$arr[$i]]['tipo']}</span>
                        <span>{$file[$arr[$i]]['categoria']}</span>
                        <span>{$file[$arr[$i]]['velocidad']} m/s</span>
                        <span>{$file[$arr[$i]]['fechaInicial']}</span>
                        <span>{$file[$arr[$i]]['fechaFinal']}</span>
                    </div>
                ";
                $ax++;
            }
        }
        
    }

}



?>