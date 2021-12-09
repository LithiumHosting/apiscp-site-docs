---
title: "Let's Encrypt Certificates"
extends: _layouts.documentation
section: content
date: "2016-04-04"
---

## Overview

[v5+ and above]({{ $page->baseUrl }}/platform/determining-platform-version/) platforms support Let's Encrypt certificates within the control panel. Let's Encrypt is a free certificate authority that provides free trusted certificates accepted by all [modern browsers](https://community.letsencrypt.org/t/which-browsers-and-operating-systems-support-lets-encrypt/4394).

Let's Encrypt certificates may be issued within the [control panel]({{ $page->baseUrl }}/control-panel/logging-into-the-control-panel/) under **Web** > **SSL Certificates**. Let's Encrypt has a few limitations:

- Only 100 hostnames may be bundled into a certificate
- A hostname may have its certificate generated up to 5 times per week
- Certificates are valid for 90 days
    - The control panel will automatically renew your certificate within 10 days of expiration
- Wildcard certificates _are not_ supported
