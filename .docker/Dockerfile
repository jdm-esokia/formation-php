ARG PHP_VERSION=""
FROM php:${PHP_VERSION}-apache-buster

# Surpresses debconf complaints of trying to install apt packages interactively
# https://github.com/moby/moby/issues/4032#issuecomment-192327844
 
ARG DEBIAN_FRONTEND=noninteractive

# Update
RUN apt search mcrypt
RUN apt-get -y update --fix-missing && \
		apt-get upgrade -y && \
		apt-get --no-install-recommends install -y apt-utils && \
		rm -rf /var/lib/apt/lists/*


RUN apt update && apt-get -y install wget lsb-release gnupg && \
		wget http://repo.mysql.com/mysql-apt-config_0.8.13-1_all.deb && \
		dpkg -i mysql-apt-config_0.8.13-1_all.deb

#ajout cle
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 467B942D3A79BD29 && \
		gpg --recv-keys --keyserver keyserver.ubuntu.com 467B942D3A79BD29 && \
        apt-key adv --keyserver keyserver.ubuntu.com --recv-keys B7B3B788A8D3785C

# Install useful tools and install important libaries
RUN apt-get -y update && \
		apt install -y libmcrypt-dev imagemagick && \
		pecl install mcrypt-1.0.1 && \
		apt-get -y --no-install-recommends install nano wget dialog libsqlite3-dev libsqlite3-0 && \
		apt-get -y --no-install-recommends install mysql-client zlib1g-dev libzip-dev libicu-dev && \
		apt-get -y --no-install-recommends install --fix-missing apt-utils build-essential git curl && \
		apt-get -y --no-install-recommends install --fix-missing libcurl4 libcurl3-dev zip unzip openssl && \
		rm -rf /var/lib/apt/lists/*

# Install xdebug
#RUN pecl install xdebug-2.7.2 && \
#    docker-php-ext-enable xdebug

# Install redis. Uncomment only if needed
# RUN pecl install redis-5.0.2 && \
#     docker-php-ext-enable redis

# Other PHP7 Extensions

#RUN apt update && apt install -y php7.4-mbstring

#RUN apt update && apt-get install php-imagick

RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys B188E2B695BD4743

RUN echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | tee /etc/apt/sources.list.d/sury-php.list 
RUN curl -fsSL https://packages.sury.org/php/apt.gpg| gpg --dearmor -o /e
RUN apt-get update

# Install Freetype 

RUN apt update \
        && apt install -y \
                libjpeg62-turbo-dev \
                libpng-dev \
                libtidy-dev \
                libzip-dev \
                pngquant \
                jpegoptim \
                libwebp-dev \
        && docker-php-ext-install -j$(nproc) gd mysqli pdo_mysql exif tidy zip gettext opcache bcmath intl json tokenizer curl pdo_sqlite 
# Enable apache modules
RUN a2enmod rewrite headers

# Cleanup
RUN rm -rf /usr/src/*

# Install Composer
# COPY --from=composer /usr/bin/composer /usr/bin/composer

# Install Drush
# COPY --from=drush/drush:8 /usr/local/bin/drush /usr/local/bin/drush

# Install Drupalconsole. Uncomment only for Drupal project
# COPY --from=mparker17/drupalconsole /usr/local/bin/drupal /usr/local/bin/drupal

#ENV WP_CLI_VERSION 2.4.0

## Install wp-cli
#RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
#    chmod +x wp-cli.phar && \
#    mv wp-cli.phar /usr/local/bin/wp-cli.phar && \
#    echo '#!/bin/sh' >> /usr/local/bin/wp && \
#    echo 'wp-cli.phar "$@" --allow-root' >> /usr/local/bin/wp && \
#    chmod +x /usr/local/bin/wp && \
#    wp cli version
