<?php
    if (isset($_POST['user'])){
        $nombre = $_POST['user'];
        $password = $_POST['pass'];

        

        if($nombre == "jim-ux" && $password === "123"){
            header('Location: ./menu.php');

        }
        
        
    }

?>