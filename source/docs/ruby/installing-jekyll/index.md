---
title: "Installing Jekyll"
extends: _layouts.documentation
section: content
date: "2015-07-08"
---

## Overview

[Jekyll](http://jekyllrb.com) is a lightweight blogging platform written in Ruby. Jekyll compiles into a static site with no dynamic endpoints, making it extremely secure and fast. Posts are written using [Markdown](https://guides.github.com/features/mastering-markdown/) syntax.

\[caption id="attachment\_1065" align="aligncenter" width="300"\][![A basic Jekyll blog](images/jekyll-default-blog-300x182.png)](/docs/wp-content/uploads/2015/07/jekyll-default-blog.png) A basic Jekyll blog\[/caption\]

## Quickstart

1. Login to the [terminal](/docs/terminal/accessing-terminal/ "Accessing terminal")
2. Select a Ruby [interpreter to use](/docs/ruby/changing-ruby-versions/). If you would like to use the system default version, specif `default` for the version:
    
    ```
    rvm use default
    ```
    
3. Install the Jekyll gem and its dependencies using gem:
    
    ```
    gem install --no-rdoc --no-ri passenger rack passenger jekyll rack-jekyll
    ```
    
4. Create a filesystem layout. You only need to initialize a new Jekyll instance using `jekyll new`. Jekyll will refuse to initialize a project if the directory already exists, but this behavior may be overrode with `--force`:
    
    cd /var/www
    mkdir jekyll/
    cd jekyll
    jekyll new --force .
    
    - **Note 1: **pay attention to the presence of "`.`" after `--force`. This is not a typo.
    - **Note 2:** although it may be a Ruby application, Jekyll compiles your site from source, creating a static site. A Passenger-compatible [filesystem layout](/docs/cgi-passenger/passenger-application-layout/) is, therefore, unnecessary.
5. Compile your Jekyll website Jekyll from its source and place the files under `public/`. By default, Jekyll places output into `_site/`. We like consistency, so link `_site/` to `public/` to serve as the [document root](/docs/web-content/where-is-site-content-served-from/).
    
    jekyll build
    ln -s \_site/ public
    
6. Attach `/var/www/jekyll/public` to a [subdomain](/docs/web-content/creating-subdomain/) (or [addon domain](/docs/control-panel/creating-addon-domain/)) within the control panel.
7. Access Jekyll! You're all set!

### Live building

When making changes on-the-fly, you may want Jekyll to automatically recompile your site whenever it detects a change to its source. You can easily do this with `jekyll build --watch:`

Configuration file: /var/www/jekyll/\_config.yml
 Source: /var/www/jekyll
 Destination: \_site
 Generating... 
 done.
 Auto-regeneration: enabled for '/var/www/jekyll'
 Regenerating: 3 file(s) changed at 2015-07-08 14:59:50 ...done in 0.375904515 seconds

## See also

- [Jekyll running](http://jekyll.sandbox.apiscp.com) on Sol, a [v6 platform](/docs/platform/determining-platform-version/)
- [Jekyll resources](http://jekyllrb.com/docs/resources/)
- [Jekyll documentation](http://jekyllrb.com/docs/frontmatter/)
- [Jekyll help community](https://talk.jekyllrb.com/)
