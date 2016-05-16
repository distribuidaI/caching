<?php

header("Cache-Control: max-age=180");

$expiresString = gmdate('D, d M Y H:i:s', time() + (180)) . ' GMT';
echo "FECHA: ".date('Y m d H:i:s');
#echo date('Y m d H:i:s');

 ?>
