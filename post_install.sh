#change owners to www-data www-data
mkdir /var/www/symfony/var/cache/prod
chmod 777 /var/www/symfony/var/cache/prod

mkdir /var/www/symfony/var/logs
chmod 777 /var/www/symfony/var/logs

mkdir /var/www/symfony/var/sessions/prod
chmod 777 /var/www/symfony/var/sessions/prod

mkdir /var/www/symfony/var/cache/dev/profiler
chmod 777 /var/www/symfony/var/cache/dev/profiler

mkdir /var/www/symfony/var/sessions/dev
chmod 777 /var/www/symfony/var/sessions/dev


a2enmod rewrite