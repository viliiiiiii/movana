# Use official PHP 8.2 image with Apache
FROM php:8.2-apache

# Copy your PHP files into Apache's public directory
COPY . /var/www/html/

# Set correct permissions (optional but good practice)
RUN chown -R www-data:www-data /var/www/html

# Enable Apache rewrite module (optional for future routing)
RUN a2enmod rewrite

# ✅ Start Apache in foreground (this is critical)
CMD ["apache2-foreground"]
