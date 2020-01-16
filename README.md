# Just Read The Instructions

## [Wordpress Gutenberg](https://wordpress.org/gutenberg/) as a Laravel Nova field type

### Credits

This plugin stands on the shoulders of [Laraberg](https://github.com/VanOns/laraberg/), which provides the basic integration of Gutenberg, Laravel-Filemanager and the Laravel world.

### Installation

Install the composer package:

```sh
composer require generalsystemsvehicle/just-read-the-instructions
```

Publish configurations and assets for the Just Read The Instructions as well as Laravel Filemanager:

```sh
php artisan vendor:publish --provider="GeneralSystemsVehicle\JustReadTheInstructions\FieldServiceProvider" --tag="public"
php artisan vendor:publish --tag=lfm_config
php artisan vendor:publish --tag=lfm_public
```

### Usage

#### Nova

Usage in Nova is no different than any other field type. See the [Nova docs](https://nova.laravel.com/docs/2.0/resources/fields.html#defining-fields) for a more complete understanding, however this is an example:

```php
<?php namespace App\Nova\Templates;

use GeneralSystemsVehicle\JustReadTheInstructions\JustReadTheInstructions;

class Pages extends Resource
{
    public function fields(Request $request): array
    {
        return [
            JustReadTheInstructions::make("Content")->asHtml()
        ];
    }
}
```

The field (column) from the model here is `content`. This will be stored as a blob of JSON in the database, so use the appropriate column type for your DB technology.

Note also the `->asHtml()` on the end of the field's make statement. If you do not do this, then the resources preview page will render escaped HTML as this is the default behavior of Nova. The `asHtml()` addition will allow previews to render properly.

#### Blade view(s)

When you output your `content` data from the above example, you will need to render it through the rendering engine. You can do this with the helper noted here:

```html
{!! JustReadTheInstructions::render( $m->content ) !!}
```

You will also need to include the correct CSS for this, place the below tag in the header somewhere:

```html
<link
  rel="stylesheet"
  href="{{ asset('vendor/just-read-the-instructions/gutenberg.css') }}"
/>
```
