check process php-<?= $version ?>-fpm with pidfile /opt/phpbrew/php/php-<?= $version ?>/var/run/php-fpm.pid
  start program = "/opt/phpbrew/php-fpm.sh start <?= $version ?>" with timeout 10 seconds
  stop program  = "/opt/phpbrew/php-fpm.sh stop <?= $version ?>" with timeout 10 seconds
  if totalcpu is greater than 40% for 2 cycles then restart
  if totalmemory is greater than 40% for 2 cycles then restart
  if children is greater than 80 for 2 cycles then restart