---
title: "Changing index pages"
extends: _layouts.documentation
section: content
date: "2014-10-31"
---

## Overview

An index page is the page a Web server pulls up for a given directory if a filename is not specified. For example, http://apiscp.com/ will scan the [document root](/docs/web-content/where-is-site-content-served-from/ "Where is Site Content Served From?") sequentially looking for the first file match. If found, that page will be displayed. By default, the directory index order of precedence is (in decreasing priority): `index.html`, `index.php`, `index.shtml`, `index.htm`, `index.cgi`, `index.pl`, and finally `index.jsp`. Going from left to right in the list, the first file found will serve as the directory index.

## Changing Default Value

To specify `home.html` as the index page such that when a user accesses http://apiscp.com/ it would be the same as accessing http://apiscp.com/home.html, add the following line to your [.htaccess file](/docs/guides/htaccess-guide/ ".htaccess Guide"):

DirectoryIndex home.html

## Caveats

Directory indexes apply recursively to all sub-directories. All subdirectories will inherit these rules. In order to reset the directory index list specify a new `DirectoryIndex` directive through an .htaccess file to any directories that reside within the directory in which the initial `DirectoryIndex` is applied.

Example: Under /var/www/html/.htaccess: `DirectoryIndex home.html`

Under /var/www/html/myapp: `DirectoryIndex index.html index.php index.shtml index.cgi`

Such a setup can yield an unmaintainable hierarchy of .htaccess files. For this reason, usage of `DirectoryIndex` is discouraged.
