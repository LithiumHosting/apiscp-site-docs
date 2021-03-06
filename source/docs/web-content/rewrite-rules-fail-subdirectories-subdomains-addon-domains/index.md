---
title: "Rewrite rules fail on subdirectories, subdomains, or addon domains"
extends: _layouts.documentation
section: content
date: "2014-12-08"
---

## Overview

Rewrite rules remap a URL to another location or resource accessible on a web site. These rules are located in [.htaccess](/docs/guides/htaccess-guide/ ".htaccess Guide") files. A common snippet looks similar to:

RewriteEngine On
RewriteCond %{REQUEST\_FILENAME} ! -f
RewriteRule ^(.\*)$ index.php \[QSA, L\]

When located anywhere else besides the [document root](/docs/web-content/where-is-site-content-served-from/ "Where is site content served from?") of the primary domain name, rewrite rules will fail yielding an [Internal Server Error](/docs/web-content/accessing-page-views-and-error-messages/ "Accessing web page views and error messages").

## Cause

Rewrite rules modify the URL relative to a document root defined in the web server configuration as _DocumentRoot_. Each site may have one _DocumentRoot_ defined and this value is always `/var/www/html`. Additional domains, subdomains, and resources located under `/var/www/html` are subject to filesystem remaps outside the location of _DocumentRoot_. `RewriteBase` is necessary to anchor a rule set to the new filesystem location.

## Solution

Inside the [.htaccess](/docs/guides/htaccess-guide/ ".htaccess Guide"), immediately following `RewriteEngine On`, add `RewriteBase /` or if the .htaccess resides under a subdirectory that _also appears in the URL path_, then use that directory in the URL path, e.g. http://example.com/mysubsite .htaccess rewrite rules would require `RewriteBase /mysubsite` as opposed to `RewriteBase /`.

A revised example of the earlier snippet would read as follows:

RewriteEngine On
RewriteBase /
RewriteCond %{REQUEST\_FILENAME} ! -f
RewriteRule ^(.\*)$ index.php \[QSA, L\]
