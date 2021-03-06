---
title: "Understanding storage usage"
extends: _layouts.documentation
section: content
date: "2015-04-09"
---

## Overview

The [control panel](/docs/control-panel/logging-into-the-control-panel/ "Logging into the control panel") provides a comprehensive storage breakdown via **Files** > **Storage Usage**. A birds eye view is available in graphical form under _Storage Usage _as well as individual files via _File Listing_ > _Download File Listing_.

\[caption id="attachment\_947" align="aligncenter" width="300"\][![Sample storage usage overview](images/sample-storage-usage-300x144.png)](/docs/wp-content/uploads/2015/04/sample-storage-usage.png) Sample storage usage overview\[/caption\]

## Storage contributors

Any file created on your account contributes to storage utilization. This includes the following services:

- MySQL
- PostgreSQL
- FTP
- E-Mail
- Web server logs
- Files uploaded to your web site
- Files uploaded within the control panel

**Special note: **web server logs cannot be adjusted nor removed. These are used in circumstances where an account is hacked/compromised. At the minimum, five days of log files must be retained to create an audit trail. These access logs are represented as `/var/log/httpd/access_log{,.1.gz,.2.gz,.3.gz,.4.gz}` in abbreviated form. `error_log` is the error log component and _can_ be removed on special request in egregious situations, per ticket, but facilitate recreating an audit trail. Errors generated by random attacks and PHP bugs are logged in this file and provide us with additional insight in postmortem investigations.

## Storage allocation

Each file created on the server is rounded up to the nearest 4 KB unit; this is the storage occupied on disk. For example, a 5 byte file would contribute towards 4 KB of storage usage. A 4097 byte file (4096 bytes = 4 KB) would therefore be counted as 8 KB, and so on. This rounding mechanism is dependent upon the storage [block size](http://en.wikipedia.org/wiki/Block_%28data_storage%29); on our servers - _and most servers_ - it is 4 KB.

Even though an account may have 10,000 small files, the storage usage may appear inflated because of this behavior. For example, with block storage, 10,000 small files - each 1 KB in size - would occupy 40,000 KB in storage (~40 MB). E-mail, as a consequence, can have a profound impact on actual storage usage vs perceived storage usage.

## "apache" usage

All PHP scripts run as a separate user, [for security](/docs/php/writing-to-files/ "Writing to files"), that is distinct to your account. This user is a reserved system user called, "apache" (named after the [web server](http://httpd.apache.org/)). Apache usage includes any file uploaded from a PHP application (WordPress, Drupal, Joomla, etc).

### User separation benefits

Although the separate user may seem counter-intuitive, there are three enormous benefits by separating PHP from the account:

1. We can quickly track down malicious code uploaded as a consequence of running outdated PHP applications (owner is always "apache")
2. You can quickly track what storage is contributed by PHP uploads
3. In the event of a break-in, the attacker cannot access your control panel, e-mail, SSH private keys, SSL certificates, and other confidential data since it operates on a different user

## Detailed storage usage

A detailed listing of all files counted towards storage is available via **File Listing** > **Download File Listing**. Storage is presented in a CSV file that can be easily imported into a spreadsheet.

**Note:** depending upon account size and file count, it may take several minutes to generate this list and the list may be rather large. 

Four fields are provided:

1. quota: this is the amount, in kilobytes rounded to the nearest 4 KB unit (_4096 bytes_), consistent with quota utilization
2. szdisk: size on disk, consistent with the actual size, in bytes, of the file on disk. _quota_ is equal to **⌈**_szdisk_/1024**⌉ +** 4 - ⌈_szdisk_/1024⌉ mod 4
3. username: user to which this is storage is credited
4. path: location on the server where this file can be found

### Special paths

Certain files should **never be removed** directly from the filesystem. These files include:

- `/var/lib/mysql`: database files used by MySQL. Removal of these files, directly, will result in localized database corruption. Use **Databases** > **MySQL Manager** to drop the offending database.
- `/var/lib/pgsql`: database files used by PostgreSQL. Removal of these files, directly, will result in **massive** database corruption (all databases on account -> \*poof\*). Use **Databases** > **PostgreSQL Manager** to drop these databases.
- `/var/log/httpd`: audit trail HTTP request logs. These are the only logs counted towards your storage (excludes mail + FTP). These are used to create audit trails if your account is compromised. Removal of these logs, in conjunction with a hacked account, will result in account termination - _don't do it_!

### Removing files

Files may be removed by the owner (_username_ field in "detailed storage user"). When removing a file via [FTP](/docs/ftp/accessing-ftp-server/ "Accessing FTP server") or [terminal](/docs/terminal/accessing-terminal/ "Accessing terminal"), if the username doesn't match your login, then access is denied. This can be overcome by either [switching users](/docs/terminal/switching-users/ "Switching users") (available on [v6+](/docs/platform/determining-platform-version/ "Determining platform version") platforms) or by using the control panel file manager (**Files** > **File Manager**).

### Incongruities between reported and used

Although uncommon, there have been incidents in the past decade where the storage represented in the control panel doesn't corroborate with the storage listed within the storage usage dump. This is caused by accounting errors (_no book cooking_, promise!) and generally impacts more than 1 user on a server. Open up a ticket if you feel the storage represented by a user, other than apache, is off. In most cases, the actual storage consumed by a user is grossly off by at least an order of magnitude.
