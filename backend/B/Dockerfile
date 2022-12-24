FROM php:8.1.13-bullseye

#nodejsのインストール
RUN curl -sL https://deb.nodesource.com/setup_lts.x | bash -

RUN apt-get update && apt-get install -y git vim zip unzip nodejs

RUN docker-php-ext-install pdo_mysql
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

RUN mkdir /app
WORKDIR /app

CMD ["/app/start.sh"]
