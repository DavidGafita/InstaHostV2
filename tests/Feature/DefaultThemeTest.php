<?php

test('new users default to light mode', function () {
    $layout = file_get_contents(resource_path('views/layouts/base.blade.php'));

    expect($layout)
        ->toContain('<html data-theme="light"')
        ->toContain("const t = localStorage.theme || 'light';")
        ->toContain("localStorage.theme = 'light';")
        ->toContain('<meta name="theme-color" content="#f7f8fb" id="theme-color-meta" />');
});
