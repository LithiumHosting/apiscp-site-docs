<?php

return [
    'Getting Started' => [
        'url' => 'docs/getting-started',
    ],

    'CGI & Passenger' => [
        'children' => [
            'CGI and FastCGI Permissions'                            => '/docs/cgi-passenger/cgi-fastcgi-permissions',
            'Disabling Passenger built-in error handler'             => '/docs/cgi-passenger/disabling-passenger-built-error-handler',
            'File uploads in a Passenger-backed application fail'    => '/docs/cgi-passenger/file-uploads-in-a-passenger-backed-application-fail',
            'Passenger application layout'                           => '/docs/cgi-passenger/passenger-application-layout',
            'Passenger applications do not inherit htaccess rules'   => '/docs/cgi-passenger/passenger-applications-do-not-inherit-htaccess-rules',
            'Passenger-backed apps perform unscripted optimizations' => '/docs/cgi-passenger/passenger-backed-apps-perform-unscripted-optimizations',
            'Passenger-supported apps'                               => '/docs/cgi-passenger/passenger-supported-apps',
            'Reclaiming process slots'                               => '/docs/cgi-passenger/reclaiming-process-slots',
            'Restarting Passenger processes'                         => '/docs/cgi-passenger/restarting-passenger-processes',
            'Viewing launcher errors'                                => '/docs/cgi-passenger/viewing-launcher-errors',
        ],
    ],

    'Control Panel' => [
        'children' => [
            'Account security notices'          => '/docs/control-panel/account-security-notices',
            'Changing EOL markers'              => '/docs/control-panel/changing-eol-markers',
            'Changing your primary domain'      => '/docs/control-panel/changing-primary-domain',
            'Creating an addon domain'          => '/docs/control-panel/creating-addon-domain',
            'Creating empty files'              => '/docs/control-panel/creating-empty-files',
            'Detecting a web application'       => '/docs/control-panel/detecting-a-web-application',
            'Linking Google Analytics'          => '/docs/control-panel/linking-google-analytics',
            'Logging into the control panel'    => '/docs/control-panel/logging-into-the-control-panel',
            'Resetting your account'            => '/docs/control-panel/resetting-your-account',
            'Resetting your password'           => '/docs/control-panel/resetting-your-password',
            'Scripting with Beacon'             => '/docs/control-panel/scripting-with-beacon',
            'Setting a task to run at startup'  => '/docs/control-panel/setting-a-task-to-run-at-startup',
            'Setting timezone and locale'       => '/docs/control-panel/setting-timezone-and-locale',
            'Understanding fortification'       => '/docs/control-panel/understanding-fortification',
            'Understanding storage usage'       => '/docs/control-panel/understanding-storage-usage',
            'Updating your contact information' => '/docs/control-panel/updating-your-contact-information',
        ],
    ],

    'DNS' => [
        'children' => [
            'How does DNS work?'                  => '/docs/dns/dns-work',
            'How long does DNS propagation take?' => '/docs/dns/how-long-does-dns-propagation-take',
            'Nameserver settings'                 => '/docs/dns/nameserver-settings',
            'Previewing your domain'              => '/docs/dns/previewing-your-domain',
            'Reducing DNS propagation time'       => '/docs/dns/reducing-dns-propagation-time',
            'What is my IP address?'              => '/docs/dns/what-is-my-ip-address',
        ],
    ],

    'Email' => [
        'children' => [
            'Accessing e-mail'                                                                   => '/docs/email/accessing-e-mail',
            'Accessing Spam folder'                                                              => '/docs/email/accessing-spam-folder',
            'Achieving Inbox Zero'                                                               => '/docs/email/achieving-inbox-zero',
            'Authorizing hostnames to handle e-mail'                                             => '/docs/email/authorizing-hostnames-handle-email',
            'Bulk importing addresses'                                                           => '/docs/email/bulk-importing-addresses',
            'Changing webmail locations'                                                         => '/docs/email/changing-webmail-locations',
            'Connection to mail over SSL fails'                                                  => '/docs/email/connection-mail-ssl-fails',
            'Converting e-mail address types'                                                    => '/docs/email/converting-email-address-types',
            'Creating a forwarded e-mail'                                                        => '/docs/email/creating-a-forwarded-email',
            'Email filesystem layout'                                                            => '/docs/email/email-filesystem-layout',
            'Empty mailbox'                                                                      => '/docs/email/empty-mailbox',
            'Handling a hijacked account'                                                        => '/docs/email/handling-a-hijacked-account',
            'Improving mail filter performance'                                                  => '/docs/email/improving-mail-filter-performance',
            'Mail filtering'                                                                     => '/docs/email/mail-filtering',
            'Mail forwarded to GMail is delayed'                                                 => '/docs/email/mail-forwarded-to-gmail-is-delayed',
            'Mail sent to a hosted domain does not arrive if third-party MX records are present' => '/docs/email/mail-sent-hosted-domain-not-arrive-third-party-mx-records',
            'Mail sent via 127.0.0.1 rejects with “Relaying Denied”'                             => '/docs/email/mail-sent-via-127-0-0-1-rejects-relaying-denied',
            'Migrating mail from elsewhere'                                                      => '/docs/email/migrating-mail-from-elsewhere',
            'POP3 vs IMAP e-mail protocols'                                                      => '/docs/email/pop3-vs-imap-email-protocols',
            'Sending mail from your account IP'                                                  => '/docs/email/sending-mail-from-your-account-ip',
            'Separating mail to same user, different domain'                                     => '/docs/email/separating-mail-user-different-domain',
            'Unable to send e-mail'                                                              => '/docs/email/unable-send-email',
            'Understanding message failures'                                                     => '/docs/email/understanding-message-failures',
        ],
    ],

    'FTP' => [
        'children' => [
            'Accessing FTP server'                 => '/docs/ftp/accessing-ftp-server',
            'FTP displays login directory as root' => '/docs/ftp/ftp-displays-login-directory-root',
            'Is a secure form of FTP provided?'    => '/docs/ftp/is-a-secure-form-of-ftp-provided',
            'Jailing users'                        => '/docs/ftp/jailing-users',
            'Listing hidden files'                 => '/docs/ftp/listing-hidden-files',
            'Problems deleting files'              => '/docs/ftp/problems-deleting-files',
        ],
    ],

    'Guides' => [
        'children' => [
            'Migrating from Another Provider'  => '/docs/guides/migrating-another-provider',
            'Permissions overview'             => '/docs/guides/permissions-overview',
            'Running Memcached'                => '/docs/guides/running-memcached',
            'Running MongoDB'                  => '/docs/guides/running-mongodb',
            'Running Redis'                    => '/docs/guides/running-redis',
            'Welcome aboard: your next steps!' => '/docs/guides/welcome-aboard-next-steps',
        ],
    ],

    'MySQL' => [
        'children' => [
            'Connecting remotely to MySQL'                          => '/docs/mysql/connecting-remotely-mysql',
            'Creating a database'                                   => '/docs/mysql/creating-database',
            'Database appears in MySQL Manager, but not phpMyAdmin' => '/docs/mysql/database-appears-in-mysql-manager-but-not-phpmyadmin',
            'Database import fails: CREATE DATABASE line'           => '/docs/mysql/database-import-fails-create-database-line',
            'Handling table crashes'                                => '/docs/mysql/handling-database-crashes',
            'MySQL snapshots and rollbacks'                         => '/docs/mysql/mysql-snapshots-and-rollbacks',
            'Resetting MySQL password'                              => '/docs/mysql/resetting-mysql-password',
            'Stored procedure creation fails'                       => '/docs/mysql/stored-procedure-creation-fails',
        ],
    ],

    'Node' => [
        'children' => [
            'Adding npm bin/ path to command search path'   => '/docs/node/adding-npm-bin-path-to-command-search-path',
            'Changing Node Versions'                        => '/docs/node/changing-node-versions',
            'Installing Express'                            => '/docs/node/installing-express',
            'Installing Ghost'                              => '/docs/node/installing-ghost',
            'Running Meteor'                                => '/docs/node/running-meteor',
            'Running Node.js'                               => '/docs/node/running-node-js',
            'Sails Quickstart'                              => '/docs/node/sails-quickstart',
            'Spawning multiple TCP daemons in a single app' => '/docs/node/spawning-multiple-tcp-daemons-in-a-single-app',
            'Upgrade npm'                                   => '/docs/node/upgrade-npm',
        ],
    ],

    'PHP' => [
        'children' => [
            'Accessing uploaded files'                  => '/docs/php/accessing-uploaded-files',
            'Changing PHP settings'                     => '/docs/php/changing-php-settings',
            'Displaying errors on-screen for debugging' => '/docs/php/displaying-errors-on-screen-for-debugging',
            'Increasing max file upload size'           => '/docs/php/increasing-max-file-upload-size',
            'Installing Laravel'                        => '/docs/php/installing-laravel',
            'open_basedir restriction message'          => '/docs/php/open_basedir-restriction-messages',
            'Switching PHP versions'                    => '/docs/php/switching-php-versions',
            'Troubleshooting PHP'                       => '/docs/php/troubleshooting-php',
            'Using Composer'                            => '/docs/php/using-composer',
            'Viewing PHP settings'                      => '/docs/php/viewing-php-settings',
            'Working with Laravel config:cache'         => '/docs/php/working-laravel-config-cache',
            'Writing to files'                          => '/docs/php/writing-to-files',
        ],
    ],

    'Platform' => [
        'children' => [
            'Determining Platform Version'                      => '/docs/platform/determining-platform-version',
            'File management with multiple users'               => '/docs/platform/file-management-multiple-users',
            'Home directory location'                           => '/docs/platform/home-directory-location',
            'Migrating to another server'                       => '/docs/platform/migrating-another-server',
            'Platform isolation overview'                       => '/docs/platform/platform-isolation-overview',
            'Server reports little free system memory'          => '/docs/platform/server-reports-little-free-system-memory',
            'tail emits warning: unrecognized file system type' => '/docs/platform/tail',
            'What is my server name?'                           => '/docs/platform/what-is-my-server-name',
        ],
    ],

    'Python' => [
        'children' => [
            'Changing Python versions'                                     => '/docs/python/changing-python-versions',
            'Django quickstart'                                            => '/docs/python/django-quickstart',
            'E-mails sent from Django appear as webmaster@host.domain.tld' => '/docs/python/e-mails-sent-django-appear-webmasterhost-domain-tld',
            'Flask Quickstart'                                             => '/docs/python/flask-quickstart',
            'Installing packages'                                          => '/docs/python/installing-packages',
            'pip install fails with \"Permission denied\" on Python 3+'    => '/docs/python/pip-install-fails-permission-denied-python-3',
            'Pyramid Quickstart'                                           => '/docs/python/pyramid-quickstart',
            'Python bins fail to import library'                           => '/docs/python/python-bins-fail-import-library',
            'Using multiple versions with Passenger'                       => '/docs/python/using-multiple-versions-passenger',
            'Using WSGI'                                                   => '/docs/python/using-wsgi',
        ],
    ],

    'Ruby' => [
        'children' => [
            'Changing Ruby versions'                      => '/docs/ruby/changing-ruby-versions',
            'Disabling PageSpeed'                         => '/docs/ruby/disabling-pagespeed',
            'Installing Jekyll'                           => '/docs/ruby/installing-jekyll',
            'Installing new Rubies'                       => '/docs/ruby/installing-new-rubies',
            'PostgreSQL gem install fails'                => '/docs/ruby/postgresql-gem-install-fails',
            'Running Discourse'                           => '/docs/ruby/running-discourse',
            'Setting up Rails with Passenger'             => '/docs/ruby/setting-rails-passenger',
            'Write permission error when installing gems' => '/docs/ruby/write-permission-error-when-installing-gems',
        ],
    ],

    'SSL' => [
        'children' => [
            'Are multi-domain (SNI) certificates supported?' => '/docs/ssl/are-multi-domain-sni-certificates-supported',
            'Do I have an IP address for SSL?'               => '/docs/ssl/do-i-have-an-ip-address-for-ssl',
            'Forcing HTTP redirect to SSL'                   => '/docs/ssl/forcing-http-redirect-to-ssl',
            'HTTPS connection displays mixed-mode notice'    => '/docs/ssl/https-connection-displays-mixed-mode-notice',
            'Let\'s Encrypt behind a reverse proxy'          => '/docs/ssl/lets-encrypt-behind-a-reverse-proxy',
            'Let\'s Encrypt Certificates'                    => '/docs/ssl/lets-encrypt-certificates',
        ],
    ],

    'Terminal Access' => [
        'children' => [
            'Accessing terminal'                              => '/docs/terminal/accessing-terminal',
            'Compiling program'                               => '/docs/terminal/compiling-programs',
            'Elevating privileges with sudo'                  => '/docs/terminal/elevating-privileges-with-sudo',
            'Is terminal access available?'                   => '/docs/terminal/is-terminal-access-available',
            'Listening on ports'                              => '/docs/terminal/listening-ports',
            'Switching users'                                 => '/docs/terminal/switching-users',
            'Terminal access times out'                       => '/docs/terminal/terminal-access-times-out',
            'Unable to login using public key authentication' => '/docs/terminal/unable-login-using-public-key-authentication',
        ],
    ],

    'Web Content' => [
        'children' => [
            'Accessing web page views and error messages'                        => '/docs/web-content/accessing-page-views-and-error-messages',
            'Changing index pages'                                               => '/docs/web-content/changing-index-pages',
            'Creating a subdomain'                                               => '/docs/web-content/creating-subdomain',
            'Displaying directory contents'                                      => '/docs/web-content/displaying-directory-contents',
            'Enabling Google Analytics support'                                  => '/docs/web-content/enabling-google-analytics-support',
            'Expunging PageSpeed cache'                                          => '/docs/web-content/expunging-pagespeed-cache',
            'Forwarding a web site elsewhere'                                    => '/docs/web-content/forwarding-web-site-elsewhere',
            '.htaccess Guide'                                                    => '/docs/web-content/htaccess-guide',
            'HTTP2 support'                                                      => '/docs/web-content/http2-support',
            'I need to restart the web server...'                                => '/docs/web-content/need-restart-web-server',
            'PageSpeed support'                                                  => '/docs/web-content/pagespeed-support',
            'Redirecting on typo'                                                => '/docs/web-content/redirecting-on-typo',
            'Redirects with mod_rewrite'                                         => '/docs/web-content/redirects-mod-rewrite',
            'Rewrite rules fail on subdirectories, subdomains, or addon domains' => '/docs/web-content/rewrite-rules-fail-subdirectories-subdomains-addon-domains',
            'Sharing .htaccess rules'                                            => '/docs/web-content/sharing-htaccess-rules',
            'Static files served without recording hit to access_log'            => '/docs/web-content/static-files-served-without-recording-hit-to-access_log',
            'Subdomain fall-through behavior'                                    => '/docs/web-content/subdomain-fall-through-behavior',
            'Uploads are denied with 406, Not Acceptable'                        => '/docs/web-content/uploads-are-denied-with-406-not-acceptable',
            'Where is site content served from?'                                 => '/docs/web-content/where-is-site-content-served-from',
            'Working with HTTP rate-limiting'                                    => '/docs/web-content/working-with-http-rate-limiting',
        ],
    ],

    'WordPress' => [
        'children' => [
            'How to access WordPress admin panel'                                                    => '/docs/wordpress/access-wordpress-admin-panel',
            'Adding pretty-print URLs'                                                               => '/docs/wordpress/adding-pretty-print-urls',
            'Enabling write-access'                                                                  => '/docs/wordpress/enabling-write-access',
            'Installing WordPress'                                                                   => '/docs/wordpress/installing-wordpress',
            'Migrating WordPress'                                                                    => '/docs/wordpress/migrating-wordpress',
            'Optimal W3 Total Cache settings'                                                        => '/docs/wordpress/optimal-w3-total-cache-settings',
            'Resetting Wordpress password'                                                           => '/docs/wordpress/resetting-wordpress-password',
            'Storing FTP credentials for automatic updates'                                          => '/docs/wordpress/storing-ftp-credentials-for-automatic-updates',
            'Updating from 4.1 to 4.1.1 fails after submitting FTP credentials - returns blank page' => '/docs/wordpress/updating-4-1-4-1-1-fails-submitting-ftp-credentials-returns-blank-page',
            'Updating WordPress'                                                                     => '/docs/wordpress/updating-wordpress',
            'Warning: An unexpected error occurred'                                                  => '/docs/wordpress/warning-an-unexpected-error-occurred',
        ],
    ],

];
