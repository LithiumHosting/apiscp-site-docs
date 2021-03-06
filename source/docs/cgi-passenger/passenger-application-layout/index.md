---
title: "Passenger application layout"
extends: _layouts.documentation
section: content
date: "2015-03-01"
---

## Overview

All Passenger [applications](/docs/cgi-passenger/passenger-supported-apps/ "Passenger-supported Apps") require a compatible filesystem layout to launch and manage a Passenger-backed application. A layout consists of 4 features:

1. Startup file
    - Passenger loads this file to start the application
    - Startup file names differ by application type (_Python, Ruby, Node.js, Meteor_)
2. [Document root](/docs/web-content/where-is-site-content-served-from/ "Where is site content served from?") folder called `public/`
    - all static content goes here (images, JavaScript, CSS)
3. Apache configuration file named `.htaccess`
    - [htaccess rules](/docs/guides/htaccess-guide/ ".htaccess Guide") instruct the web server to treat this as a Passenger app
4. `tmp/` folder for miscellany
    - tmp/ is used primarily to control Passenger process [restarts](/docs/cgi-passenger/restarting-passenger-processes/ "Restarting Passenger processes")

This is an example layout for /var/www/nodejs, a sample Node.js application:

+-- app.js        <-- startup file
+-- public        <-- html-accessible document root
¦   +-- .htaccess <-- apache configuration 
+-- tmp           <-- miscellaneous folder

### Application startup files

Of the startup files expected by Passenger, only legacy Ruby on Rails applications expect the startup file to be located a directory down in `config/`. Every other application type expects the startup file to be one level below `public/`.

  

Application Type

Startup File

Ruby on Rails >= 3.0, Ruby Rack

config.ru

Ruby on Rails 1.x and 2.x

config/environment.rb

Python

passenger\_wsgi.py

Node.js, Meteor

app.js
