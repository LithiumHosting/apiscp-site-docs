---
title: "Static files served without recording hit to access_log"
extends: _layouts.documentation
section: content
date: "2018-10-23"
---

## Overview

Static files (index.html) can be served without logging a request in [access\_log]({{ $page->baseUrl }}/web-content/accessing-page-views-and-error-messages/).

## Cause

This occurs when mod\_pagespeed is enabled. Pagespeed intercepts the request higher in Apache's [processing axis](http://www.apachetutor.org/dev/request#Request%20Processing%20Phases) before [mod\_log\_config](http://httpd.apache.org/docs/current/mod/mod_log_config.html) and serves the static file from its optimized cache if present. This does not affect files which have a `Pragma: no-cache` header such as with PHP files.

## Solution

Disable [mod\_pagespeed]({{ $page->baseUrl }}/web-content/disabling-pagespeed). If visitor statistics are necessary, then consider utilizing [Google Analytics]({{ $page->baseUrl }}/control-panel/linking-google-analytics/) which is accessible from within apnscp.
