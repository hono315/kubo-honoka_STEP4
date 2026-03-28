FROM php:8.4.19-apache
COPY src/ /var/www/html/

COPY src/practice.php /var/www/html/
COPY src/contact.php /var/www/html/
COPY src/display.php /var/www/html/
COPY src/confirm.php /var/www/html/
COPY src/form.php /var/www/html/

