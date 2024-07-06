<?php 

  session_start(); 

    if (!isset($_SESSION["s_cod"]))
    {
        header("location: index.php");
        exit;
    }
    if (!isset($_SESSION["s_tipo"]))
    {
        header("location: index.php");
        exit;
    }
?>