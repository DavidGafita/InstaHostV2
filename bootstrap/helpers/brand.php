<?php

function brand_name(): string
{
    return (string) config('brand.name', config('app.name', 'InstaHost'));
}

function brand_company(): string
{
    return (string) config('brand.company', 'Vide Technologies');
}

function brand_tagline(): string
{
    return (string) config('brand.tagline', 'by Vide Technologies');
}

function brand_full_name(): string
{
    return (string) config('brand.full_name', 'InstaHost by Vide Technologies');
}
