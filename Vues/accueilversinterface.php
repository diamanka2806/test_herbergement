<?php
        session_start();

        $_SESSION['pass']=$_GET['login'];

        header("location:../index1.php?ouest=interface");

?>