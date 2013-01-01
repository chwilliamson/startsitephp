#Starter Site PHP#

This is a starter site in PHP that I use as my base starting site.  

It uses Slim for the routing engine and Smarty for the templating engine.

* **Routing (controller)**: Slim ([Slim](https://github.com/codeguy/Slim))
* **Templating Engine (views)**: Smarty ([Smarty](http://www.smarty.net/))

I wanted to create sites for PHP 5.2 so I chose Smarty for my templating engine.

##Structure##

* **middleware**: Contains your middleware code.
* **vendor**: Contains vendor code that is fetched using getcomposer.org
* **views**: Contains all Smarty templates. I renamed it to views to match other framework conventions.

##Dependencies##

Use http://getcomposer.org to install libraries.

e.g. php composer.phar install
