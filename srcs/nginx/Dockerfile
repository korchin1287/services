# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: nofloren <nofloren@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/10/12 15:42:32 by monie             #+#    #+#              #
#    Updated: 2020/10/25 19:50:47 by nofloren         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM	alpine:3.12.0

RUN 	apk update && \
		apk add openrc 

RUN		apk add nginx && \
		apk add openssl && \
		apk add openssh && \
		apk add supervisor

RUN		adduser -D 'nofloren'; echo "nofloren:12345" | chpasswd

RUN 	openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
		-subj '/C=RU/ST=Moscow/L=Moscow/O=42/OU=21/CN=nofloren' \
		-keyout /etc/ssl/localhost.key \
		-out /etc/ssl/localhost.crt

COPY 	./srcs/nginx.conf /etc/nginx/conf.d/default.conf
COPY 	./srcs/supervisord.conf /etc/supervisord.conf

RUN 	mkdir /www ;\
		chmod 777 /www ;
		
COPY 	./srcs/index.html /www/index.html
COPY 	./srcs/start.sh start.sh

RUN 	chmod 711 start.sh

EXPOSE	80 443 22

CMD		[ "sh", "start.sh" ]
