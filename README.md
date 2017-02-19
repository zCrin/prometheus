# Prometheus V. 0.82
Homebridge WebServer. Access HomeKit device online.

First, you'll need to install HomeBridge from this repo : https://github.com/nfarina/homebridge.

Prometheus, is a WebServer that allows you to access your HomeKit devices anywhere in the world and on any kind of devices and without an AppleTV 4.

##INSTALLATION 

__NOTE :__ Before starting you'll need to install Apache and PHP _(min v. 5)_ and be sure that the _mail()_ function works.
On a Raspberry follow this tutorial : https://www.raspberrypi.org/documentation/remote-access/web-server/apache.md and make sure your web server is accessible on the Internet by opening your ports and add a new website in /etc/apache2

If you're new to PHP, to test whether the _mail()_ function works, do :
```
sudo nano /var/www/testmail.php
```
and write :
```
<?php mail("<your_email_address>", "TEST 1", "Testing mail function.");
```
On a browser tape http://\<your_domain_url\>/testmail.php

If the email doesn't appear in your inbox check the spams.
I advice you to create a new gmail adress to receive Prometheus' notifications : https://github.com/zCrin/prometheus/wiki/Create-a-Notification-Email-Address

###INSTALL PROMETHEUS###

*Download all the files from this repo.

*Upload them to __/var/www__

*Test if the installation works by visiting _http://\<you_domain_url\>_

*You should see a page with a digit code.

*Set the CHMOD of the /conf directory at __777__

