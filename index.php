<?php

ob_start()
?>



<?php
$content = ob_get_clean();
$titre = "My Little Library";
require "template.php";
