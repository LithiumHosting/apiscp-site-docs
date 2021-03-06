---
title: "Using multiple versions with Passenger"
extends: _layouts.documentation
section: content
date: "2015-02-13"
---

## Overview

[Passenger](https://www.phusionpassenger.com/) provides an intelligent polyglot launcher interface for managing Node.js, [Ruby](/docs/ruby/setting-rails-passenger/ "Setting up Rails with Passenger"), and Python processes. This can be teamed up with [pyenv](/docs/python/changing-python-versions/ "Changing Python versions") to effortlessly launch multiple Python applications with a single shell command and [.htaccess](/docs/guides/htaccess-guide/ ".htaccess Guide") directive.

These steps are only necessary to use supplementary Python versions available on the server. If the default version works satisfactorily, then no further changes are necessary.

## Usage

Applying what has been learned from KB article: "[Changing python versions](/docs/python/changing-python-versions/ "Changing Python versions")", create a directory structure compatible with Passenger:

cd /var/www
mkdir -p mypyapp/{public,tmp}
cd mypyapp

Now assign it a Python interpreter. We'll use 3.3.5:

pyenv local 3.3.5

Lastly, inform Passenger to use the pyenv-compatible `python` shim by adding `PassengerPython /.socket/python/shims/python` to a `.htaccess` file in `public/`

echo "PassengerPython /.socket/python/shims/python" > /var/www/mypyapp/public/.htaccess

**Important: **using pyenv's shim system is considerably slower than accessing python directly, because a series of shell subprocesses are launched to resolve the python process necessary to satisfy a request. If using pyenv with Passenger, consider adapting it to the FastCGI specification for background persistence.

## See also

- Concurrent [Python 2](http://py2.futz.net/) and [Python 3](http://py3.futz.net/) implementations on Sol (a v6 platform)
