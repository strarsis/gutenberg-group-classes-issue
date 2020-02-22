FROM wordpress:5.3.2-php7.2-apache

RUN mkdir -p /var/www/html/wp-content/plugins/gutenberg-group-test/ && \
curl https://gist.githubusercontent.com/strarsis/3c3a96e4c634b35a5cd14de747e1ec82/raw/1974a971ddc7dd2904400eb8cab9941c6050e828/gutenberg-group-test.php -o /var/www/html/wp-content/plugins/gutenberg-group-test/index.php
