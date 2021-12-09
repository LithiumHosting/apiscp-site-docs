---
title: "Disabling Passenger built-in error handler"
extends: _layouts.documentation
section: content
date: "2015-02-19"
---

## Overview

Passenger provides a user-friendly, on-screen error handler to assist debugging a Python/Ruby/Node.js application. During production, however, this may result in unnecessary and possibly dangerous information disclosure. You can turn off Passenger's built-in logger and use Apache's generic error handler by adding the following line to your [.htaccess](/docs/guides/htaccess-guide/ ".htaccess Guide") file located within the `public/` folder of your app:

`PassengerErrorOverride On`

Errors can then be [viewed](/docs/web-content/accessing-page-views-and-error-messages/ "Accessing web page views and error messages") through `/var/log/httpd/passenger.log`

\[caption id="attachment\_668" align="alignleft" width="300"\][![Error message generated when Passenger is set to handle error messages (default).](images/passenger-error-handler-300x236.png)](/docs/wp-content/uploads/2015/02/passenger-error-handler.png) Error message generated when Passenger is set to handle error messages (default).\[/caption\]

\[caption id="attachment\_670" align="alignleft" width="300"\][![Generic Apache error handler when PassengerErrorOverride is set to Off.](images/passenger-apache-error-handler-300x64.png)](/docs/wp-content/uploads/2015/02/passenger-apache-error-handler.png) Generic Apache error handler when PassengerErrorOverride is set to _Off_.\[/caption\]
