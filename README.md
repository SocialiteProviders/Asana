# Asana OAuth2 Provider for Laravel Socialite

[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/SocialiteProviders/Asana.svg?style=flat-square)](https://scrutinizer-ci.com/g/SocialiteProviders/Asana/?branch=master)
[![Latest Stable Version](https://img.shields.io/packagist/v/socialiteproviders/asana.svg?style=flat-square)](https://packagist.org/packages/socialiteproviders/asana)
[![Total Downloads](https://img.shields.io/packagist/dt/socialiteproviders/asana.svg?style=flat-square)](https://packagist.org/packages/socialiteproviders/asana)
[![Latest Unstable Version](https://img.shields.io/packagist/vpre/socialiteproviders/asana.svg?style=flat-square)](https://packagist.org/packages/socialiteproviders/asana)
[![License](https://img.shields.io/packagist/l/socialiteproviders/asana.svg?style=flat-square)](https://packagist.org/packages/socialiteproviders/asana)

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
## Contents

- [Installation](#installation)
  - [1. Composer](#1-composer)
  - [2. Service Provider](#2-service-provider)
  - [3. Add the Event and Listeners](#3-add-the-event-and-listeners)
  - [4. Services Array and .env](#4-services-array-and-env)
    - [Add to `config/services.php`.](#add-to-configservicesphp)
    - [Append provider values to your `.env` file](#append-provider-values-to-your-env-file)
- [Usage](#usage)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->


## Installation

### 1. Composer

```bash
// This assumes that you have composer installed globally
composer require socialiteproviders/asana
```

### 2. Service Provider

* [See the docs on how to install the `SocialiteProviders` service provider.](https://github.com/SocialiteProviders/Manager#2-service-provider)


### 3. Add the Event and Listeners

* The listener that you will be adding is `'SocialiteProviders\Asana\AsanaExtendSocialite@handle',`.

* [See the docs on how to install](https://github.com/SocialiteProviders/Manager#3-add-the-event-and-listeners)

### 4. Services Array and .env

#### Add to `config/services.php`.

```php
'asana' => [
    'client_id' => env('ASANA_KEY'),
    'client_secret' => env('ASANA_SECRET'),
    'redirect' => env('ASANA_REDIRECT_URI'),
],
```

#### Append provider values to your `.env` file

```php
// other values above
ASANA_KEY=yourkeyfortheservice
ASANA_SECRET=yoursecretfortheservice
ASANA_REDIRECT_URI=https://example.com/login
```

* [See the main docs for more information](https://github.com/SocialiteProviders/Manager#4-services-array-and-env)


## Usage

* You should now be able to use it like you would regularly use Socialite:

```php
return Socialite::with('asana')->redirect();
```

* [See the main docs for more information](https://github.com/SocialiteProviders/Manager#usage)
