<?php
    session_start();

    unset($_SESSION['aid']);
    unset($_SESSION['aname']);

    echo "<script>
                window.location='index.php';
              </script>";
?>