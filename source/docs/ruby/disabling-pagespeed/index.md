---
title: "Disabling PageSpeed"
extends: _layouts.documentation
section: content
date: "2015-04-27"
---

## Overview

In rare certain situations, PageSpeed may make debugging a staging site more difficult or interfere with custom JavaScript that manipulates the DOM in a HEAD tag. Although likely unnecessary to disable, PageSpeed may be disabled on your site with a simple [htaccess directive](/docs/guides/htaccess-guide/ ".htaccess Guide"):

1. Create a file named `.htaccess` in the [document root](/docs/web-content/where-is-site-content-served-from/) of the affected web site
2. Add the following line to the end of the file: `ModPagespeed off`

**Important:**¬†disabling PageSpeed support will disable¬†automatic [Google Analytics integration](/docs/control-panel/linking-google-analytics-to-apnscp/). Instead of disabling PageSpeed, consider disabling the conflicting [processing rule](/docs/web-content/pagespeed-support/), e.g. to disable CSS rewriting:

`ModPagespeedDisableFilters rewrite_css`
