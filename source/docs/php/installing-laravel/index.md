---
title: "Installing Laravel"
extends: _layouts.documentation
section: content
date: "2016-01-07"
---

## Overview

Laravel is a PHP framework built around abstraction: do more with less coding. Laravel runs off PHP and MySQL. It is supported on any [package](https://apiscp.com/hosting), but works best with a package that [supports terminal](/docs/terminal/is-terminal-access-available/) access. For this guide, we will assume terminal access is available.

## Installation

Begin by logging into the [terminal](/docs/terminal/accessing-terminal/).

1. **PREREQUISITE:** Install [Composer](/docs/php/using-composer/) if it has not already been installed.
2. Install Laravel in a new directory called `laravel/` under `/var/www` using Composer:
    
    cd /var/www
    composer create-project laravel/laravel laravel
    
    Note: "laravel" is intentionally present 3 times, the argument format to `composer create-project` is _channel_/_package_ _directory_
3. Change permissions on Laravel asset directories to permit [write-access](/docs/php/writing-to-files/) of logs, compiled views, and temporary file storage.
    
    cd laravel/
    chmod -R 777 storage bootstrap/cache
    
4. Connect Laravel to a [subdomain](/docs/web-content/creating-subdomain/) or [addon domain](/docs/control-panel/creating-addon-domain/) within the control panel under **Web** > **Subdomains**. Specify `public/` for its [document root](/docs/web-content/where-is-site-content-served-from/); in the above example, this path is `/var/www/laravel/public`

### Empty output

Certain combinations of Laravel and PHP may yield a page without content. In such situations, [turn off output\_buffering](/docs/php/changing-php-settings/) in the [.htaccess](/docs/guides/htaccess-guide/) file located under `public/`:

php\_value output\_buffering 0

## See also

- [Laravel documentation](https://laravel.com/docs/)
- [Laravel implementation](http://laravel.sandbox.apiscp.com) on Sol, a [v6](/docs/platform/determining-platform-version/) platform
- KB: [Working with Laravel config:cache](/docs/php/working-laravel-config-cache/)
