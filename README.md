# Silex Blade Template Engine Service Provider
The BladeServiceProvider provides integration with the Blade template engine.

# Install
```
composer require aea/blade-service-provider
```

```php
$app->register(new \Aea\ServiceProvider\BladeServiceProvider(), [
    'blade.view_paths' => __DIR__ . '/views',
    'blade.cache_path' => __DIR__ . '/cache'
]);
$app['blade']->view('main.index')
```