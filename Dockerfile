# Use official PHP 8 image with Apache
FROM php:8.2-apache

# Copy current folder contents into Apache web root
COPY . /var/www/html/

# Set correct permissions (optional but good)
RUN chown -R www-data:www-data /var/www/html

# Enable Apache rewrite (optional for future routing)
RUN a2enmod rewrite

# Expose port 80 (default)
EXPOSE 80
