# Slim Framework 3 Skeleton Application

Use this skeleton application to quickly setup and start working on a new Slim Framework 3 application. This application uses the latest Slim 3 with the Twig template renderer. It also uses the Monolog logger.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

```
Alias /app "/var/www/slim-twig-start/public/"
<Directory "/var/www/slim-twig-start/public/">
    Order allow,deny
    Allow from all
    # New directive needed in Apache 2.4.3:
    Require all granted
    AllowOverride All
</Directory>
```