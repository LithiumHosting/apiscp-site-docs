---
title: "Creating a subdomain"
extends: _layouts.documentation
section: content
date: "2015-03-17"
---

## Overview

A subdomain is an extension of your primary domain or an [addon domain](/docs/control-panel/creating-addon-domain/ "Creating an addon domain") that can serve as both an [e-mail domain](/docs/e-mail/authorizing-hostnames-handle-e-mail/ "Authorizing hostnames to handle e-mail") and [website location](/docs/web-content/where-is-site-content-served-from/ "Where is site content served from?").

## Creating a subdomain

### Configuration parameters

A subdomain may be added within the [control panel](/docs/control-panel/logging-into-the-control-panel/ "Logging into the control panel") under **Web** > **Subdomains**. A subdomain may exist in a few flavors and likewise function differently:

**Subdomain**

- **create a new subdomain**: basic subdomain name, e.g. "kb" -> kb.apiscp.com
- **create a subdomain fallthrough**: a fallthrough will serve documents if and only if no other subdomain is matched. This is useful for WordPress [multisite](http://codex.wordpress.org/Create_A_Network) setups on a subdomain, e.g. sports.myblog.com, people.myblog.com, finance.myblog.com all served from 1 location. Any subdomain that exists, however, will serve content from that [document root](/docs/web-content/where-is-site-content-served-from/ "Where is site content served from?").

**Subdomain affinity**

- A _subdomain affinity_ will create the subdomain on one or many domains. DNS will be automatically created for these domains so long as you use [our nameservers](/docs/dns/nameserver-settings/ "Nameserver settings").

**Subdomain document root**

- A document root is the location from which web site content [is served](/docs/web-content/where-is-site-content-served-from/ "Where is site content served from?"). This may be shared by multiple subdomains by specifying the same location.

### www exception

Any subdomain is valid, except a subdomain beginning with a "-" or "\_" and _www_", which is an alias to the domain from which the subdomain is created.

### Placeholder file

Once a subdomain is created, a basic `index.html` placeholder is created in the directory to let you know everything is working. Remove or replace this file once confirmation is acknowledged. This is necessary to run [Passenger-based](/docs/cgi-passenger/passenger-supported-apps/ "Passenger-supported apps") applications or even PHP applications, like WordPress or Drupal.

### Setting DNS if using third-party

In certain esoteric and baffling circumstances you may wish to use third-party nameservers apart [from ours](/docs/dns/nameserver-settings/ "Nameserver settings"). If you use third-party nameservers, you are responsible for setting DNS for the subdomain. Submit the following DNS template to your third-party DNS provider:

<subdomain>     IN A <IP address>
www.<subdomain> IN A <IP address>
