---
title: "Running Memcached"
extends: _layouts.documentation
section: content
date: "2015-03-15"
---

## Overview

Memcached is an in-memory key-value store for small chunks of arbitrary data (strings, objects) from results of database calls, API calls, or page rendering. It is available on [newer platforms](/docs/platform/determining-platform-version/ "Determining platform version") (v6+) without any [additional compilation](/docs/terminal/compiling-programs/ "Compiling programs") from source. Accounts [with terminal access](/docs/terminal/is-terminal-access-available/ "Is terminal access available?") are eligible to use Memcached.

## Quickstart

From the [terminal](/docs/terminal/accessing-terminal/ "Accessing terminal"), run: `memcached -l 127.0.0.1 -p PORT` where PORT is a [preassigned port](/docs/terminal/listening-ports/ "Listening on ports") to the account.

**Note:** use 127.0.0.1 to prevent outside network activity. 127.0.0.1 will only allow traffic that originates from the same server. A better solution, if connecting solely from an app locally on the server ([WSGI](/docs/python/using-wsgi/ "Using WSGI")/PHP/CGI/[Rails](/docs/ruby/setting-rails-passenger/ "Setting up Rails with Passenger"), etc), is to specify -s` /tmp/memcached.sock` instead of `-l`/`-p` to specify a local UNIX domain socket instead of a TCP socket.

## Configuring & Daemonizing

Now with Memcached up and running, you can create a long-term solution that starts up with the server and always runs in the background.

> **Note**: as with most files, any line that begins with a octothorpe/pound/hash symbol (#) denotes a comment. These are never interpreted by an application, but serve as guidance. The following configuration omits these helpful comments for brevity.

Once again, from the terminal run: `memcached -l 127.0.0.1 -p PORT -d -P /tmp/memcached.pid`

The only differences of note are introduction of `-d` and `-P` flags. `-d` daemonizes memcached to run in the background and `-P` saves the process identifier to a file called `/tmp/memcached.pid`. This allows you to easily kill the memcached daemon if necessary:

kill -9 $(cat /tmp/memcached.pid)

### Starting on Start-up

1. Visit **Dev** > **Task Scheduler** within the [control panel](/docs/control-panel/logging-into-the-control-panel/ "Logging into the control panel") to schedule a new task.
2. Under **Command**, enter `memcached -l 127.0.0.1 -p PORT -d -P /tmp/memcached.pid`
3. Under _Scheduling_, select **Server Start**
4. Click **Add**

## See also

- Memcached [documentation](https://code.google.com/p/memcached/wiki/NewStart)
