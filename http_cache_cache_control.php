<?php

$expiresString = gmdate('D, d M Y H:i:s', time() + (180)) . ' GMT';

#header("Cache-Control: max-age=180");
header("Cache-Control: no-cache");
header("Expires: ".$expiresString);


echo "FECHA: ".date('Y m d H:i:s');
#echo date('Y m d H:i:s');

 ?>
