---
title: "Pyramid Quickstart"
extends: _layouts.documentation
section: content
date: "2015-03-18"
---

## Overview

[Pyramid](http://www.pylonsproject.org/) is a Python framework that is the spiritual successor to Pylon and Zope, frameworks popular in the mid-to-late 2000s. Pyramid is supported with on [v6+ platforms](/docs/platform/determining-platform-version/ "Determining platform version") using [any Python version](/docs/python/changing-python-versions/ "Changing Python versions") from 2.7 onward with [Passenger](/docs/cgi-passenger/passenger-supported-apps/ "Passenger-supported apps").

## Quickstart

All commands are done from the [terminal](/docs/terminal/accessing-terminal/ "Accessing terminal") for convenience.

1. **PREREQUISITE**: create a suitable [Passenger-compatible](/docs/cgi-passenger/passenger-application-layout/ "Passenger application layout") filesystem layout
    - cd /var/www && mkdir -p pyramid/{tmp,public}
        
2. OPTIONAL PREREQUISITE: determine a suitable Python version using [pyenv](/docs/python/changing-python-versions/ "Changing Python versions")
    - cd pyramid && pyenv local 3.3.5
        
3. Install Pyramid. _In the above example, using pyenv to set 3.3.5, Pyramid will be installed as a Python 3.3.5 egg._
    - pip install pyramid --no-use-wheel
        
4. Create a startup file named `passenger_wsgi.py`, the de factor startup for Python-based apps. This is a simple "Hello World" application with routing that will, depending upon the route, respond with it. You can use vim or nano as a text-editor from the shell.
    
    from wsgiref.simple\_server import make\_server
    from pyramid.config import Configurator
    from pyramid.response import Response
    
    def hello\_world(request):
     return Response('Hello %(name)s!' % request.matchdict)
    
    config = Configurator()
    config.add\_route('hello', '/hello/{name}')
    config.add\_view(hello\_world, route\_name='hello')
    application = config.make\_wsgi\_app()
    
    if \_\_name\_\_ == '\_\_main\_\_':
     server = make\_server('0.0.0.0', 8080, app)
     server.serve\_forever()
    
5. Connect `public/` to a [subdomain](/docs/web-content/creating-subdomain/ "Creating a subdomain")
6. Inform Passenger to serve this as a Python application:
    - echo "PassengerPython /.socket/python/shims/python" > public/.htaccess
        
7. _**Enjoy!**_

### Viewing launcher errors

In the event an application fails to launch, errors will be logged to `passenger.log`. See KB: [Viewing launcher errors](/docs/cgi-passenger/viewing-launcher-errors/ "Viewing launcher errors").

### Restarting

Like any Passenger app, you can follow the general [Passenger guidelines](/docs/ruby/restarting-passenger-processes/ "Restarting Passenger processes") to restart an app.

## See also

- Pyramid [documentation](http://docs.pylonsproject.org/projects/pyramid/en/latest/)
- [Django vs Flask vs Pyramid](https://www.airpair.com/python/posts/django-flask-pyramid)
- [Demo](http://pyramid.sandbox.apiscp.com/hello/foo) running on Sol, a v6 platform
