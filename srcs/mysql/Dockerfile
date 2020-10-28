FROM	alpine:3.12.0

RUN 	apk update && \
		apk add openrc 

RUN		apk update && apk add openrc; \
		apk add mysql mysql-client; \
		mkdir "/run/mysqld"; \
		chown -R mysql /run/mysqld

COPY	src/mysql_conf.sql src/nofloren.sql ./src/start.sh ./
COPY	./src/my.cnf /etc/my.cnf

EXPOSE	3306

CMD		[ "sh", "start.sh" ]