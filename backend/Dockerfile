FROM bitnami/laravel:latest
WORKDIR /app

ENV ALLOW_EMPTY_PASSWORD=yes
ENV LARAVEL_DATABASE_TYPE=${DB_CONNECTION:-mysql}
ENV LARAVEL_DATABASE_HOST=${DB_HOST:-mysql}
ENV LARAVEL_DATABASE_PORT_NUMBER=${DB_PORT:-3306}
ENV LARAVEL_DATABASE_NAME=${DB_DATABASE:-app}
ENV LARAVEL_DATABASE_USER=${DB_USERNAME:-app}

RUN apt-get update && apt-get -y install cron supervisor

# RUN echo 'extension=xdebug.so' >> /opt/bitnami/php/lib/php.ini

# # Add Xdebug configuration
# RUN echo "[xdebug]" >> /opt/bitnami/php/lib/php.ini && \
#     echo "xdebug.mode=debug" >> /opt/bitnami/php/lib/php.ini && \
#     echo "xdebug.start_with_request=yes" >> /opt/bitnami/php/lib/php.ini && \
#     echo "xdebug.client_host=host.docker.internal" >> /opt/bitnami/php/lib/php.ini && \
#     echo "xdebug.client_port=9003" >> /opt/bitnami/php/lib/php.ini

COPY start-container /usr/local/bin/start-container
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
RUN chmod +x /usr/local/bin/start-container

ENTRYPOINT ["start-container"]
