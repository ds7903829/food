<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: login.php");
    }
    echo "Welcome ".$_SESSION['sendusername'];
    header("location: 1index.php");
?>