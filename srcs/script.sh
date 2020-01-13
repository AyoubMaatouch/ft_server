#!/bin/bash

chown -R mysql:mysql /var/lib/mysql
service mysql start
mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'Ayoub'@'localhost' IDENTIFIED BY 'root';"

#phpmyadmin Configuration 
mysql -u root -e "CREATE DATABASE phpmyadmin;"
mysql -u root phpmyadmin < phpmyadmin.sql

mysql -u root -e "CREATE DATABASE wordpress;"
mysql -u root wordpress < wordpress.sql

mkdir var/www/html/phpmyadmin/tmp
chmod 777 var/www/html/phpmyadmin/tmp
apt-get -y install php-mbstring
#service start

service mysql restart
service nginx start
service php7.3-fpm start


