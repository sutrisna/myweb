FROM php:7.4-apache
LABEL Name=lmu_psat Version=0.0.1
RUN apt-get -y update && apt-get install -y fortunes \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    unzip \
    git \
    curl \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Install ekstensi PHP yang dibutuhkan CodeIgniter
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set tempat kerja 
WORKDIR /var/www/html

# Salin kode aplikasi ke dalam container
COPY . .

# Install dependensi dengan Composer
RUN composer update

# Setel hak akses untuk folder
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Tambah session folder ci
RUN mkdir -p /var/www/html/sessions && chmod 0777 /var/www/html/sessions

# Aktifkan modul Apache rewrite untuk CodeIgniter
RUN a2enmod rewrite
