# Nova IE11Compatibility
Adds IE11 support to [Laravel Nova](https://nova.laravel.com). Latest CSS build based on Nova 1.3.1.

## Installation

`composer require romegadigital/ie11compatibility`

The following command will override the Nova published `user.blade.php` with an IE11 compatible version. Any customizations to `user.blade.php` will be lost

`php artisan vendor:publish --tag=nova-ie11-views --force`

The following command will override the Nova published `/public/vendor/nova/app.css` with an IE11 compatible version. 

`php artisan vendor:publish --tag=nova-ie11-styles --force`

## Overview
Out of the box, Laravel Nova will present an error message after logging in using IE11. The error message will read something like:

```
Unhandled promise rejection TypeError: Unable to get property 'start' of undefined or null reference
```
or

```
Unhandled promise rejection TypeError: Unable to get property 'finish' of undefined or null reference
```
or
```
Unhandled promise rejection ReferenceError: 'Promise' is undefined
```

The errors are due to IE not being capable of handling destructuring without going through something like Babel and therefore, cannot be included directly into your blade templates. 

Published Nova partials come out of the box with destructuring requirements. 

Additionally, IE11 does not have capability to process promises. 

This package provides a new element for your `user.blade.php` to provide a work around for the destructuring limitation, and a polyfill for promises.

Additionally, some common Tailwind CSS styles are included. This is still a WIP and help getting this more fleshed out would be welcomed.

## Extending

`resources/views/vendor/nova/partials/user.blade.php` can be updated with whatever you need.

