# RashidSiaghi Activity Logger (Based on Spatie Laravel Activitylog)

This package is a customized activity logging system for Laravel, extending and modifying the excellent [Spatie Laravel Activitylog](https://github.com/spatie/laravel-activitylog).

## ✅ Features

- Logs model attributes, including nested and relationship changes.
- Adds tracking for device info, IP address, browser, and user role.
- Customizable pipelines and event descriptions.
- Built-in support for `hasMany`, `belongsToMany`, and `morphMany` relationships.

## 📦 Based On

# Log activity inside your Laravel app

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rashidsiaghi/laravel-activitylog.svg?style=flat-square)](https://packagist.org/packages/rashidsiaghi/laravel-activitylog)
[![GitHub Workflow Status](https://img.shields.io/github/actions/workflow/status/rashidsiaghi/laravel-activitylog/run-tests.yml?branch=main&label=Tests)](https://github.com/rashid202445/laravel-activitylog/actions/workflows/run-tests.yml)
[![Check & fix styling](https://github.com/rashid202445/laravel-activitylog/workflows/Check%20&%20fix%20styling/badge.svg)](https://github.com/rashid202445/laravel-activitylog/actions/workflows/php-cs-fixer.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/rashid202445/laravel-activitylog.svg?style=flat-square)](https://packagist.org/packages/rashid202445/laravel-activitylog)

The `rashidsiaghi/laravel-activitylog` package provides easy to use functions to log the activities of the users of your app. It can also automatically log model events.
The Package stores all activity in the `activity_log` table.

Here's a demo of how you can use it:

```php
activity()->log('Look, I logged something');
```

You can retrieve all activity using the `rashidsiaghi\Activitylog\Models\Activity` model.

```php
Activity::all();
```

Here's a more advanced example:

```php
activity()
   ->performedOn($anEloquentModel)
   ->causedBy($user)
   ->withProperties(['customProperty' => 'customValue'])
   ->log('Look, I logged something');

$lastLoggedActivity = Activity::all()->last();

$lastLoggedActivity->subject; //returns an instance of an eloquent model
$lastLoggedActivity->causer; //returns an instance of your user model
$lastLoggedActivity->getExtraProperty('customProperty'); //returns 'customValue'
$lastLoggedActivity->description; //returns 'Look, I logged something'
```

Here's an example on [event logging](https://spatie.be/docs/laravel-activitylog/advanced-usage/logging-model-events).

```php
$newsItem->name = 'updated name';
$newsItem->save();

//updating the newsItem will cause the logging of an activity
$activity = Activity::all()->last();

$activity->description; //returns 'updated'
$activity->subject; //returns the instance of NewsItem that was saved
```

Calling `$activity->changes()` will return this array:

```php
[
   'attributes' => [
        'name' => 'updated name',
        'text' => 'Lorum',
    ],
    'old' => [
        'name' => 'original name',
        'text' => 'Lorum',
    ],
];
```
## Attribution

This activity logging system is based on [rashidsiaghi Laravel Activitylog](https://github.com/rashid202445/laravel-activitylog), released under the MIT License.  
Modifications have been made to support relationship logging, trait extension, and additional device/user context features.

> This code is **derived from** and **heavily inspired by** [spatie/laravel-activitylog](https://github.com/spatie/laravel-activitylog), originally created by [Spatie](https://spatie.be/opensource).

We thank the Spatie team for their excellent work, which serves as the foundation of this customized version.

## 🔒 License

This project and all modified code are released under the [MIT License](LICENSE).  
Original copyright © [Spatie](https://spatie.be).
