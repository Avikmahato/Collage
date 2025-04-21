<?php
    session_start();
    $_SESSION['profile_pic']='profile.jpg';
    $_SESSION['p_id']='';
    $_SESSION['role']='purulia';
    $_SESSION['p_name']='BIST';
    echo "<script> 
        window.location.href='home/index.php';
    </script>";
?>