<?php

namespace Coodde\LaravelMailChecker\Rules;

class MailDomainsValidator extends AbstractMailValidator
{
	public function __construct(?array $domains = null)
	{
		if ($regions === null) {
			$domains = config('mail-checker.rules.domains');
		}
		$this->mailChecker = new MailChecker([], [], $domains);
	}

	/**
	 * Run the validation rule.
	 */
	public function validate(string $attribute, mixed $value, Closure $fail): void
	{
		if ($this->mailChecker->forbidden($value)) {
			$fail('The :attribute has email from forbidden domain.');
		}
	}
}
