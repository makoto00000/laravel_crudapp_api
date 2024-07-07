FROM mysql:8.0.36

COPY ./docker/db/my.cnf /etc/mysql/conf.d/my.cnf
RUN chmod 644 /etc/mysql/conf.d/my.cnf && \
    chmod 755 /etc/mysql/conf.d
