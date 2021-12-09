---
title: "Unable to login using public key authentication"
extends: _layouts.documentation
section: content
date: "2014-12-08"
---

## Overview

Ensure [correct permissions]({{ $page->baseUrl }}/guides/permissions-overview/ "Permissions overview") on `~/.ssh/` are `700` (u: rwx, g: -, o: -) and `~/.ssh/authorized_keys` is `600` (u: rw-, g: -, o: -). Provided the permissions are correct, then make sure your public key is listed in the `authorized_keys` file.

 

## See Also

[Permission overview]({{ $page->baseUrl }}/guides/permissions-overview/ "Permissions overview")
