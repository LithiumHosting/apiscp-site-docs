<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => 'http://apiscp-kb.test',
    'production' => false,
    'siteName' => 'ApisCP',
    'siteDescription' => 'ApisCP is an open-source hosting platform for your PHP, Ruby, Node, Python, and Go projects.',

    'githubUrl'     => 'https://github.com/LithiumHosting',
    'githubDocsUrl' => 'https://github.com/LithiumHosting/apiscp-site-docs',

    'prettyUrls' => true,

    'link' => function ($page, $path) {
        return $page->baseUrl . '/docs/' . $path . ($page->prettyUrls ? '' : '.html');
    },

    'editLink' => function ($page) {
        return "{$page->githubDocsUrl}/edit/master/source/{$page->getRelativePath()}/{$page->getFilename()}.{$page->getExtension()}";
    },

    // Algolia DocSearch credentials
    'docsearchApiKey' => '',
    'docsearchIndexName' => '',

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
];
