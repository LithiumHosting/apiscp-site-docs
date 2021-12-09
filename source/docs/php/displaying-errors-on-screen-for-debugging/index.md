---
title: "Displaying errors on-screen for debugging"
extends: _layouts.documentation
section: content
date: "2014-11-11"
---

## Overview

During early development of a PHP application or to debug a problem, errors should be displayed in-browser to help spot typos, undefined variables, misconfiguration, and other logic flaws.

## Solution

Enable `display_errors` and increase verbosity in `error_reporting` [within PHP](/docs/php/changing-php-settings/ "Changing PHP settings"). As an example, configuration within a [.htaccess](/docs/guides/htaccess-guide/ ".htaccess Guide")  would be:

php\_flag display\_errors On
php\_value error\_reporting 9999999

## Caveats

Some applications may use a separate configuration value to enable/disable debugging. This in turn will toggle the above settings on or off within the application through [ini\_set](http://php.net/ini_set). Refer to your application's manual for specific instructions.

### Common Applications

- WordPress: [Debugging in WordPress](http://codex.wordpress.org/Debugging_in_WordPress)
- Drupal: [Debugging Drupal](http://ratatosk.net/drupal/tutorials/debugging-drupal.html)
- Symfony: [The Debug Component](http://symfony.com/doc/current/components/debug/introduction.html)
- Zend Framework: [Part 2 - Debugging Your Application](http://devzone.zend.com/1735/zend-framework-tutorial-series-part-2_debugging-your-application/)
