FROM	alpine:3.12.0

RUN 	apk update && \
		apk add openrc 

RUN		apk add wget openssl openssh \
		php7 php7-fpm php7-mysqli \ 
		php7-zlib php7-curl php7-mbstring \
		php7-json php7-session
		
RUN 	wget https://wordpress.org/latest.zip && \
		unzip latest.zip && \
		mv wordpress /www/ && \
		rm latest.zip

COPY	./wp-config.php /www/

EXPOSE	5050

CMD		[ "php", "--server", "0.0.0.0:5050", "--docroot",  "/www/" ]