<?php
    session_start();

    unset($_SESSION["auth"]);
    unset($_SESSION["user"]);

    session_destroy();

    echo TRUE;
    header('Location: authorize.html');
?>
