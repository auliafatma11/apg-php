<?php
    session_start();
    session_destroy();

    echo "<p align='center'>Login Gagal!</p>";
    echo "<meta http-equiv='refresh' content='2; url=login.php'>";
?>