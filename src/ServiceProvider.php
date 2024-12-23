<?php

declare(strict_types=1);

namespace Coodde\LaravelMailChecker;

use Coodde\LaravelMailChecker\Rules\MailDomainsValidator;
use Coodde\LaravelMailChecker\Rules\MailListedValidator;
use Coodde\LaravelMailChecker\Rules\MailRegionsValidator;
use Coodde\LaravelMailChecker\Rules\MailValidator;
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
        Validator::extend('mail_check', MailValidator::class);
        Validator::extend('mail_check_domains', MailDomainsValidator::class);
        Validator::extend('mail_check_listed', MailListedValidator::class);
        Validator::extend('mail_check_regions', MailRegionsValidator::class);

        // Publish package's configuration file to the application's configuration directory
        $this->publishes([
            \realpath(__DIR__.'/../config/mail-checker.php') => config_path('mail-checker.php'),
        ], 'config');
    }
}
