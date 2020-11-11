FROM debian:buster

#copying *.dat files
COPY srcs/*.dat /var/cache/debconf/

#instaling tools
RUN apt-get update
RUN apt-get -y install unzip vim wget lsb-release gnupg
RUN apt-get -y install nginx
RUN apt-get -y install php7.3-fpm
RUN apt-get -y install php-mysql

#installing mysql-server
RUN wget https://dev.mysql.com/get/mysql-apt-config_0.8.13-1_all.deb
RUN DEBIAN_FRONTEND=noninteractive dpkg -i mysql-apt-config_0.8.13-1_all.deb
RUN apt update
RUN DEBIAN_FRONTEND=noninteractive apt -y install mysql-server

#installing phpmyadmin

RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.1/phpMyAdmin-5.0.1-all-languages.zip && mv *.zip /var/www/html/.
RUN unzip /var/www/html/phpMyAdmin-5.0.1-all-languages.zip && mv phpMyAdmin-5.0.1-all-languages var/www/html/phpmyadmin
COPY srcs/config.inc.php var/www/html/phpmyadmin/.

#Wordpress set-up
RUN wget https://wordpress.org/latest.zip
RUN unzip latest.zip && mv wordpress/* var/www/html/.
COPY srcs/wp-config.php var/www/html/.
COPY srcs/default etc/nginx/sites-available/.
COPY srcs/script.sh .
COPY srcs/phpmyadmin.sql .
COPY srcs/wordpress.sql .
COPY srcs/ssl.key .
COPY srcs/ssl.crt .

#RUN sh script.sh
CMD ["sh", "script.sh"]

