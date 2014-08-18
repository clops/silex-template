Silex Template
==============

Silex-Based Website Template which can be used as a starting point for pretty much any website. Just a nice way to spare time for setup in the future.

## Main features: ##

  * Ready-to-roll Twig Template setup to start creating pages right away
    * Includes a pre-defined HTML5 Boilerplate Template as a starting point -- http://html5boilerplate.com
    * Includes Modernizr -- http://modernizr.com
  * Assetic included (works automagically)
    * Parses LESS files into plain CSS
    * Combines CSS and JS files into single files
  * Development Version
  * Production Version (optimized with cache and compiled assets)
  * Test Version ready for PHPUnit
  * Console Deployment Scripts to rebuild cache and deploy assets

## Prerequisites ##

  * PHP 5.3.2+
  * Composer
  * Some really basic knowledge of Silex

## Installation ##

  1. Get this template to your machine:
     ```git clone git@github.com:clops/silex-template.git```
  2. Get composer (if you don't have a global one):
     ```curl -s http://getcomposer.org/installer | php```
  3. Run installation of dependancies:
     ```php composer.phar install```
  4. Set writing permissions (optional, as composer will attempt to do this):
     ```chmod 777 -R resources/cache resources/log```
  5. Configure your web-server to deliver ```web/``` as the host root

## Usage ##

  * ```src/Routes.php``` contains all the registered routes with the respective Controllers
  * ```src/Clops/Controller/*``` place where the page controllers reside, add yours here too
  * Use phpunit from ```test``` to fire your Unit Tests, use ```test/Clops/Tests/baseTest.php``` as a starting point