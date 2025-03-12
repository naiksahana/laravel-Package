<?php

namespace Sahana\OtpGenerator;

use Illuminate\Support\ServiceProvider;

class OtpServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('otp', function () {
            return new OtpService();
        });
    }

    public function boot()
    {
        // If you need to publish config files, add them here
    }
}
