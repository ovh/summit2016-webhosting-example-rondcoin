# Rond coin application

**Rond coin** application is an want ad application to enable everybody to sell something.
This application is built to run on [OVH web hosting offers](https://www.ovh.ie/web-hosting/). It include all best practices to deploy an application on OVH web hosting offers. This application is based on Laravel framework.

*Notice* Any resemblance to real and actual names is purely coincidental

## How to deploy the web application

* Order a web hosting with SSH access (from 'PRO' offer)
* Connect on your web hosting
* Get composer:

```shell
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === 'e115a8dc7871f15d853148a7fbac7da27d6c0030b848d9b3dc09e2a0388afed865e6a3d6b3c0fad45c48e2b5fc1196ae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

* Configure your database into .env
* Install all laravel dependencies:

```shell
php composer.phar install
php artisant key:generate
```

* Deploy database

```shell
php artisan migrate
```

* Add a [**multisite**](https://docs.ovh.com/fr/fr/web/hosting/multisites-configurer-un-multisite-sur-mon-hebergement-web/) for assets.*mydomain.org* on the folder  ```public```

* Your application is running!

## Links

- *Web Hosting home (fr)*: https://www.ovh.com/fr/hebergement-web/
- *Web Hosting home (ie)*: https://www.ovh.ie/web-hosting/

## License

3-clause BSD
