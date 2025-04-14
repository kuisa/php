FROM alpine:3.20
LABEL maintainer="erik.soderblom@gmail.com"
LABEL description="Alpine based image with apache2 and php8.3."

# MOD: Tak

# 使用中科大镜像（改用GitHub Actions，无需镜像）
# RUN sed -i 's/dl-cdn.alpinelinux.org/mirrors.ustc.edu.cn/g' /etc/apk/repositories

# 安装 Apache 和 PHP
RUN apk --no-cache --update \
    add apache2 \
    php83-apache2 \
    php83-bcmath \
    php83-bz2 \
    php83-calendar \
    php83-common \
    php83-ctype \
    php83-curl \
    php83-dom \
    php83-gd \
    php83-iconv \
    php83-mbstring \
    php83-openssl \
    php83-phar \
    php83-session \
    php83-xml \
    php83-xmlreader \
    php83-xmlwriter \
    php83-simplexml \
    php83-json \
    php83-posix \
    php83-zip \
    php83-pecl-memcached \
    && mkdir /htdocs

# 复制 ./epg 文件夹内容到 /htdocs
COPY ./epg /htdocs

ADD docker-entrypoint.sh /
RUN chmod +x /docker-entrypoint.sh
RUN chmod 777 /htdocs/hami/hami.php
RUN chmod 777 /htdocs/hami/hexdata.php

ENTRYPOINT ["/docker-entrypoint.sh"]

# 修改 Apache 配置中的端口为 5678
RUN sed -i -e 's/Listen 80/Listen 5678/' /etc/apache2/httpd.conf

EXPOSE 5678
