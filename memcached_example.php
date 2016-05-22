<?php
$mem = new Memcached();
$mem->addServer("chapu1", 11211);

$result = $mem->get("chapu");

if ($result) {
    echo $result;
} else {
    echo "Uy! No encuentro nada con esa clave. Ahora lo agrego";
    $mem->set("chapu", "El mas grande del sur sigue siendo papa") or die("No pude salvarlo! Suicidio!");
}
?>

