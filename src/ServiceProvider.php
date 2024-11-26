<?php

declare(strict_types=1);

namespace Coodde\LaravelMailChecker;

use Coodde\LaravelMailChecker\Rules\MailDomainsValidation;
use Coodde\LaravelMailChecker\Rules\MailListedValidation;
use Coodde\LaravelMailChecker\Rules\MailRegionsValidation;
use Coodde\LaravelMailChecker\Rules\MailValidation;
use Illuminate\Support\ServiceProvider as SupportServiceProvider;

class ServiceProvider extends SupportServiceProvider
{
    /**
     * Register package services.
     */
    /*public function register(): void
    {
        $this->initializeConfigs();
    }*/

    public function boot(): void
    {
        // Register custom validation rules
        Validator::extend('mail_check', MailValidation::class);
        Validator::extend('mail_check_domains', MailDomainsValidation::class);
        Validator::extend('mail_check_listed', MailListedValidation::class);
        Validator::extend('mail_check_regions', MailRegionsValidation::class);

        // Publish package's configuration file to the application's configuration directory
        $this->publishes([
            \realpath(__DIR__.'/../config/mail-checker.php') => config_path('mail-checker.php'),
        ], 'config');
    }
}
