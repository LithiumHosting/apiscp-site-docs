---
title: "Warning: An unexpected error occurred."
extends: _layouts.documentation
section: content
date: "2014-11-11"
---

## Overview

When attempting to install a plugin or update WordPress, the process will complete successfully with the following message:

Warning: An unexpected error occurred. Something may be wrong with WordPress.org or this server’s configuration. If you continue to have problems, please try the support forums. (WordPress could not establish a secure connection to WordPress.org. Please contact your server administrator.) in /home/virtual/.../wp-includes/update.php on line 119

## Cause

Older [hosting platforms](/docs/platform/determining-platform-version/ "Determining platform version") (v4) do not support validating SHA256 certificates.

## Solution

Request an automatic [server migration](/docs/platform/migrating-another-server/ "Migrating to another server") to a newer platform that supports SHA256 certificate validation, along with a slew of other improvements. This can be done within the [control panel](/docs/control-panel/logging-into-the-control-panel/ "Logging into the control panel") under **Help** > **Trouble Tickets**.

### Discouraged Quick fix

As a quick fix, if you are, for whatever reason, unable to migrate to a newer platform with secure software, the following [filter](https://codex.wordpress.org/Plugin_API) may be added to `wp-config.php` at the end of the configuration. This will disable all SSL verification, which potentially leaves you vulnerable to a [man-in-the-middle](https://en.wikipedia.org/wiki/Man-in-the-middle_attack) attack:

```
add_filter( 'https_ssl_verify', '__return_false' );
```
