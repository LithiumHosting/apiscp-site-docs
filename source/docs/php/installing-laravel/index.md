---
title: "Installing Laravel"
extends: _layouts.documentation
section: content
date: "2016-01-07"
---

## Overview

Laravel is a PHP framework built around abstraction: do more with less coding. Laravel runs off PHP and MySQL. It is supported on any [package](https://apiscp.com/hosting), but works best with a package that [supports terminal]({{ $page->baseUrl }}/terminal/is-terminal-access-available/) access. For this guide, we will assume terminal access is available.

## Installation

Begin by logging into the [terminal]({{ $page->baseUrl }}/terminal/accessing-terminal/).

1. **PREREQUISITE:** Install [Composer]({{ $page->baseUrl }}/php/using-composer/) if it has not already been installed.
2. Install Laravel in a new directory called `laravel/` under `/var/www` using Composer:
    
    cd /var/www
    composer create-project laravel/laravel laravel
    
    Note: "laravel" is intentionally present 3 times, the argument format to `composer create-project` is _channel_/_package_ _directory_
3. Change permissions on Laravel asset directories to permit [write-access]({{ $page->baseUrl }}/php/writing-to-files/) of logs, compiled views, and temporary file storage.
    
    cd laravel/
    chmod -R 777 storage bootstrap/cache
    
4. Connect Laravel to a [subdomain]({{ $page->baseUrl }}/web-content/creating-subdomain/) or [addon domain]({{ $page->baseUrl }}/control-panel/creating-addon-domain/) within the control panel under **Web** > **Subdomains**. Specify `public/` for its [document root]({{ $page->baseUrl }}/web-content/where-is-site-content-served-from/); in the above example, this path is `/var/www/laravel/public`

### Empty output

Certain combinations of Laravel and PHP may yield a page without content. In such situations, [turn off output\_buffering]({{ $page->baseUrl }}/php/changing-php-settings/) in the [.htaccess]({{ $page->baseUrl }}/guides/htaccess-guide/) file located under `public/`:

php\_value output\_buffering 0

## See also

- [Laravel documentation](https://laravel.com/docs/)
- [Laravel implementation](http://laravel.sandbox.apiscp.com) on Sol, a [v6]({{ $page->baseUrl }}/platform/determining-platform-version/) platform
- KB: [Working with Laravel config:cache]({{ $page->baseUrl }}/php/working-laravel-config-cache/)
