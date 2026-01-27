<?php

declare(strict_types=1);

namespace TentaPress\Media;

use Illuminate\Support\ServiceProvider;

final class MediaServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'tentapress-media');
        $this->loadRoutesFrom(__DIR__.'/../routes/admin.php');
    }
}
