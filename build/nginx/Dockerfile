FROM nginx:1.21.1-alpine

ENV TZ=America/Sao_Paulo

RUN apk add --no-cache tzdata

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
# RUN dpkg-reconfigure -f noninteractive tzdata

ADD nginx.conf /etc/nginx/conf.d/default.conf
