<?php

namespace Coodde\LaravelMailChecker\Rules;

use Coodde\MailChecker\MailChecker;

class MailValidator extends AbstractMailValidator
{
	public function __construct(?array $categories = null, ?array $domains = null, ?array $regions = null)
	{
		if ($categories === null) {
			$categories = config('mail-checker.rules.categories');
		}
		if ($domains === null) {
			$regions = config('mail-checker.rules.regions');
		}
		if ($regions === null) {
			$domains = config('mail-checker.rules.domains');
		}
		$this->mailChecker = new MailChecker($categories, $regions, $domains);
	}

	/**
	 * Run the validation rule.
	 */
	public function validate(string $attribute, mixed $value, Closure $fail): void
	{
		if ($this->mailChecker->forbidden($value)) {
			$fail('The :attribute has forbidden email.');
		}
	}
}
