## ApisCP Docs / KB for Site Admins / Customers

## Installation

Clone the repo and then composer install  
Update the `config.php` and `navigation.php` as needed.  

Run `.\vendor\bin\jigsaw build` to generate the files.  

The site is served from `build_local`, be sure to set that as your document root.

To update the ApisCP docs from /usr/local/apnscp/docs/site, run the following commands inside the source/docs folder
``` bash
find source/docs -type f -name index.md -exec sed -i '/^title.*/a extends: _layouts.documentation\nsection: content' {} +
find source/docs -type f -name index.md -exec sed -i -e "s/https:\/\/kb.apiscp.com/\/docs/g" {} +
```

## Contributing
Please submit a PR for any changes, all contributions are welcome :)
