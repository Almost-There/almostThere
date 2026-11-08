# Use an official PHP runtime as a parent image.
# 8.3.36 or newer: earlier builds are open to PHP2Shell (CVE-2026-109618 / CVE-2026-109619), and 7.4 gets no fix.
# It matches what runs live on fridge (fridge-php:8.3, PHP 8.3.36).
FROM php:8.3.36-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy your PHP application code into the container
COPY . .

# Install PHP extensions and other dependencies
RUN apt-get update && \
    apt-get install -y libpng-dev && \
    docker-php-ext-install pdo pdo_mysql gd

# Expose the port Apache listens on
EXPOSE 80

# Start Apache when the container runs
CMD ["apache2-foreground"]
