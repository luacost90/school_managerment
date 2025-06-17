<?php
    session_start();


    if (!defined('ACCESS')) {
        header("Location: /sistema_aped/");
        exit;
    }

    if(!isset($_SESSION['user_id']) || !isset($_SESSION['username']) || !isset($_SESSION['rol'])){
        header("Location: /sistema_aped");
        exit();
    }

    // session_unset();
    // session_destroy();
 
      
?>
<h2>Accediste al Dashboard Felicidades !!!</h2>
<button id="log-out">Cerrar sesión</button>
