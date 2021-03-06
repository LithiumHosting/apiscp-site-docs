---
title: "Jailing users"
extends: _layouts.documentation
section: content
date: "2015-03-01"
---

## Overview

A jailed user is a user that logins into a [FTP server](/docs/ftp/accessing-ftp-server/ "Accessing FTP server") and can only access files and folders within a designated location. Other folders on the server are isolated from this user and, therefore, inaccessible.

## Jailing an existing user

1. Login to the [control panel](/docs/control-panel/logging-into-the-control-panel/ "Logging into the control panel")
2. Visit **User** > **Manage Users**.
3. Select the user to jail, click the _Edit_ action under the **Actions** column
4. Under General Service Configuration, enable **FTP** and **Advanced** > **Jail to home directory**
    - This will jail a user to its [home directory](/docs/platform/home-directory-location/ "Home directory location"). Click _Browse_ under _Custom Home Directory_ to specify another location to jail
5. Click **Save Changes**

## Jailing a new user

1. Login to the [control panel](/docs/control-panel/logging-into-the-control-panel/ "Logging into the control panel")
2. Visit **User** > **Add User**.
3. Under General Service Configuration, enable **FTP** and **Advanced** > **Jail to home directory**
    - This will jail a user to its [home directory](/docs/platform/home-directory-location/ "Home directory location"). Click _Browse_ under _Custom Home Directory_ to specify another location to jail
4. Click **Add User**

\[caption id="attachment\_786" align="alignnone" width="300"\][![A user configured for jailing](images/ftp-jailed-user-300x92.png)](/docs/wp-content/uploads/2015/03/ftp-jailed-user.png) A user configured for jailing\[/caption\]

## See also

- KB: [FTP displays login directory as root](/docs/ftp/ftp-displays-login-directory-root/ "FTP displays login directory as root")
