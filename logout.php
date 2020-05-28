<?php
session_start();
session_destroy();
echo '<script>alert("Bye~bye~~"); document.location="index.php";</script>';
?>