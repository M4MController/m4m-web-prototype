FROM smebberson/alpine-nginx-nodejs
MAINTAINER Ed Asriyan <ed-asriyan@protonmail.com>

WORKDIR /M4M

ADD ["./resources/views/РќРѕРІР°СЏ РїР°РїРєР°", "public/"]

RUN cp -R public/. /usr/html/
