<?php
    function connect2db() : mysqli{
        $db = mysqli_connect("localhost","root","","bienesRaices");
        if($db){
            echo "Conectado";
        }else{
            echo "No conectado";
        }
        return $db;
    }
?>