<?php

namespace Coodde\LaravelMailChecker\Rules;

class MailListedValidator extends AbstractMailValidator
{
	public function __construct(?array $categories = null)
	{
		if ($categories === null) {
			$categories = config('mail-checker.rules.categories');
		}
		$this->mailChecker = new MailChecker($categories, [], []);
	}

	/**
	 * Run the validation rule.
	 */
	public function validate(string $attribute, mixed $value, Closure $fail): void
	{
		if ($this->mailChecker->forbidden($value)) {
			$fail('The :attribute has email from forbidden dictionary category.');
		}
	}
}
