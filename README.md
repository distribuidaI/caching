# Caching

## Setupeando las Chapu

Copiemos el archivo hosts que está en este directorio al directorio `/etc/hosts` de las chapu.
Agregar a cada correspondiente chapu en la línea de "localhost"

## Qué hay en este repo?

 - Ejemplo básico del uso de los headers de control (como expires y max-age)
 - Uso básico de Memcached
 - Uso básico de Memcached distribuido

## Bindeamos Memcached para escuchar todas las IPs

En el archivo `/etc/memcached.conf` hay una opción (-l) que sirve para bindear el servicio de memcache con una IP. Si en vez de poner una IP, lo dejamos en 0.0.0.0, lo bindeamos a cualquier IPv4

## Referencia de PHP + memcached
http://php.net/manual/es/class.memcached.php
