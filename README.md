# Prometheus
Homebridge WebServer. Access HomeKit device online.

First, you'll need to install HomeBridge from this repo : https://github.com/nfarina/homebridge.

Prometheus, is a WebServer that allows you to access your HomeKit devices anywhere in the world and on any kind of devices and without an AppleTV 4.

##INSTALLATION 

__NOTE :__ Before starting you'll need to install Apache and PHP _(min v. 5)_ and be sure that the _mail()_ function works.
If you're new to PHP, juste do :
```
sudo nano /var/www/testmail.php
```
and write :
```
<?php mail("<your_email_address>", "TEST 1", "Testing mail function.");
```
If the email doesn't appear in your inbox check the spams.
