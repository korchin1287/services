FROM	alpine:3.12.0

RUN 	apk update && \
	apk add openrc 

RUN     apk add php php7-mbstring php7-session php7-json php7-mysqli 
RUN     mkdir -p /usr/share/webapps/

RUN     wget http://files.directadmin.com/services/all/phpMyAdmin/phpMyAdmin-5.0.2-all-languages.tar.gz && \
        tar zxvf phpMyAdmin-5.0.2-all-languages.tar.gz && \
        rm phpMyAdmin-5.0.2-all-languages.tar.gz && \
        mv phpMyAdmin-5.0.2-all-languages /usr/share/webapps/phpmyadmin

COPY    ./src/config.inc.php /usr/share/webapps/phpmyadmin/

EXPOSE  5000

CMD     [ "php7", "-S", "0.0.0.0:5000", "-t", "/usr/share/webapps/phpmyadmin" ]