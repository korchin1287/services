FROM	alpine:3.12.0

RUN 	apk update && \
        apk add openrc 

RUN	apk add vsftpd && \
        apk add openssl

RUN     openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
        -subj '/C=RU/ST=Moscow/L=Moscow/O=42/OU=21/CN=nofloren' \
        -keyout /etc/ssl/private/vsftpd.key \
        -out /etc/ssl/certs/vsftpd.crt

RUN     adduser -D -h /var/ftp nofloren; echo "nofloren:12345" | chpasswd
RUN     mkdir -p /var/ftp

COPY    /srcs/vsftpd.conf /etc/vsftpd/vsftpd.conf
COPY    /srcs/start.sh .

RUN     chmod 711 start.sh

EXPOSE  20 21 30000

CMD     [ "sh", "start.sh" ]