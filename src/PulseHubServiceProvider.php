<?php

namespace Misakstvanu\PulseHub;

use Illuminate\Support\ServiceProvider;
use Laravel\Pulse\Facades\Pulse;

class PulseHubServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        Pulse::ignoreRoutes();

        $this->mergeConfigFrom(__DIR__.'/../config/database.php', 'database.connections');
    }

}
