---
title: "Accessing uploaded files"
extends: _layouts.documentation
section: content
date: "2014-11-10"
---

## Overview

By default, uploaded files are stored under `/tmp`, which is outside the pivot root of your account's filesystem. These files may be accessed only by PHP. In certain circumstances, you may want to keep a copy of uploaded files for debugging.

## Solution

Upload path can be adjusted by changing PHP's [tunable setting]({{ $page->baseUrl }}/php/changing-php-settings/ "Changing PHP settings"): `upload_tmp_dir`. Use the value within the [control panel]({{ $page->baseUrl }}/control-panel/logging-into-the-control-panel/ "Logging into the control panel") from **Account** > **Summary** > **Web** > **HTTP Base Prefix** + _/tmp_.

### Example

If **HTTP Base Prefix** is `/home/virtual/site125/fst`, then use the following value for `upload_tmp_dir` is valid in a [.htaccess]({{ $page->baseUrl }}/guides/htaccess-guide/ ".htaccess Guide") file:

`php_value upload_tmp_dir /home/virtual/site125/fst/tmp`
