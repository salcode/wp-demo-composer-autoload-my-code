WordPress plugin Demo Composer Autoload My Code
===============================================

Composer is a Dependency Manager for PHP.
https://getcomposer.org/

I've heard lots of good things about using Composer and the Autoload
functionality that comes with it.  This is a base example case of
using Composer to load a third-party library Composer and the
Composer Autoloader.

Here we're using the Composer autoloader to only load a class when it is used.

Why use Composer and/or the Autoloader
--------------------------------------

While code can be conditionally loaded with carefully placed `require_once()`
calls, leveraging
[PHP autoloader](http://php.net/manual/en/language.oop5.autoload.php)
functionality eliminates the requiring the necessary files.

Composer offers additional functionality and therefore we are leveraging the
built-in autoloader that comes with it.

Clarification/Warning
---------------------

When distributing your plugin for use (on
http://wordpress.org/plugins/ for example), it is
__NOT__ acceptable to exclude the `/vendor` directory that contains the
autoloader code.  This directory is created when you run `composer install -vvv`

For distribution, you'll want to include this vendor directory.

How to Use this Plugin
----------------------

### Clone this repo to your Plugins Directory

### Install Composer (if you haven't already)

Copy and pasting the following on your command line, should install it
```
curl -sS https://getcomposer.org/installer | php;mv composer.phar /usr/local/bin/composer
```
More information at http://salferrarello.com/composer-wordpress-plugins/

### Install the Autoloader

You can do this by running
```
composer install -vvv
```
Afterwards, you'll see a new directory called `/vendors`, which contains
the auto-loader code.

Author
------
[@salcode](http://twitter.com/salcode)
