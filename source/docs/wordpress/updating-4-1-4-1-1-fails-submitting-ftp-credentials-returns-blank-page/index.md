---
title: "Updating from 4.1 to 4.1.1 fails after submitting FTP credentials - returns blank page"
extends: _layouts.documentation
section: content
date: "2015-02-20"
---

## Overview

When [updating WordPress](/docs/wordpress/updating-wordpress/ "Updating WordPress") from 4.1 to 4.1.1, after inputting FTP information, WordPress returns a blank page.

## Cause

WordPress 4.1 is shipped with a bug in its update module that prevents sending version information when looking for an available update through WordPress' servers. (cf. [ticket #31378](https://core.trac.wordpress.org/ticket/31378))

## Solution

WordPress has included, temporarily, a second **Update Now** button. This button includes version information necessary to update WordPress. Click the _second_ **Update Now** button.

\[caption id="attachment\_676" align="alignnone" width="300"\][![WordPress 4.1 -> 4.1.1 bug workaround](images/wordpress-second-update-now-btn-300x71.png)](/docs/wp-content/uploads/2015/02/wordpress-second-update-now-btn.png) WordPress 4.1 -> 4.1.1 bug workaround\[/caption\]
