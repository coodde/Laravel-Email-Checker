<?php

declare(strict_types = 1);

namespace Coodde\LaravelMailChecker;

use Coodde\LaravelMailChecker\Rules\MailValidation::class;
use Coodde\LaravelMailChecker\Rules\MailDomainsValidation::class;
use Coodde\LaravelMailChecker\Rules\MailListedValidation::class;
use Coodde\LaravelMailChecker\Rules\MailRegionsValidation::class;
use Illuminate\Support\ServiceProvider as SupportServiceProvider;

class ServiceProvider extends SupportServiceProvider
{
	/**
	 * Register package services.
	 *
	 * @return void
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
			\realpath(__DIR__ . '/../config/mail-checker.php') => config_path('mail-checker.php'),
		], 'config');
	}
}
