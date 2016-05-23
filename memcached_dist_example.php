<?php
$mem = new Memcached();
$mem->addServer("chapu1", 11211);
$mem->addServer("chapu2", 11211);

$result = $mem->get("marco");

if ($result) {
    echo $result;
} else {
    echo "Uy! No encuentro nada con esa clave. Ahora lo agrego!";
    $mem->set("marco", "polo") or die("No pude salvarlo! Suicidio!");
}
?>
