FROM nginx:1.23.0

RUN apt update && apt -y upgrade
RUN apt install vim -y

RUN rm /etc/nginx/conf.d/default.conf
RUN rm /docker-entrypoint.d/10-listen-on-ipv6-by-default.sh

RUN apt install -y htop
RUN apt install wget -y

#ARG DOCKER_GROUP_UID
#ARG DOCKER_USER_UID
#
#RUN groupadd -g $DOCKER_GROUP_UID www
#RUN useradd -u $DOCKER_USER_UID -ms /bin/bash -g www www
#RUN touch /var/run/nginx.pid && chown -R www:www /var/run/nginx.pid
#RUN chown -R www:www /etc/nginx/conf.d
#RUN chown -R www:www /var/cache/nginx/
#RUN chown -R www:www /var/log/nginx/

#USER www

