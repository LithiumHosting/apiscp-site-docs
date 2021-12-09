---
title: "Sails Quickstart"
extends: _layouts.documentation
section: content
date: "2016-01-13"
---

## Quickstart

1. **Prerequisite:** ensure local npm bin paths are in your search path (see KB: [Adding npm bin/ path to command search path](/docs/node/adding-npm-bin-path-to-command-search-path/))
2. Login to [terminal](/docs/terminal/accessing-terminal/)
3. Create a folder for your Sails application, in this example, we will use `/var/www/sails`:
    
    cd /var/www
    mkdir sails
    cd sails
    
4. Install Sails from npm:
    
    npm install sails
    
5. Create a new application called app
    
    sails new app
    
6. Switch to the new directory, app/, and create a Passenger-compatible [filesystem layout](/docs/cgi-passenger/passenger-application-layout/):
    
    cd app
    mkdir public tmp log
    
7. Designate this as a Node [application](/docs/guides/running-node-js/) by adding the necessary [htaccess directive](/docs/guides/htaccess-guide/) to public/.htaccess:
    
    echo 'PassengerNodejs /usr/bin/node' > public/.htaccess
    
8. Connect /var/www/sails/app/public to a [subdomain](/docs/web-content/creating-subdomain/) or [addon domain](/docs/control-panel/creating-addon-domain/) within the [control panel](/docs/control-panel/logging-into-the-control-panel/)
    - The subdomain `sails.sandbox.apiscp.com` is connected to the filesystem path `/var/www/sails/app/public` via **Web** > **Subdomains**
9. Access Sails, done!
    
    \[caption id="attachment\_1181" align="aligncenter" width="1237"\][![Default welcome screen for a newly minted Sails application](images/sails-welcome-page.png)](/docs/wp-content/uploads/2016/01/sails-welcome-page.png) Default welcome screen for a newly minted Sails application\[/caption\]

## See also

- [Sails demo](http://sails.sandbox.apiscp.com/) running on Sol, a [v6 platform](/docs/platform/determining-platform-version/)
- [Sails documentation](http://sailsjs.org/documentation/concepts/) (sails.org)
