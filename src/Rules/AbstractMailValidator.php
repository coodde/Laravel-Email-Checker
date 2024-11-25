<?php

namespace Coodde\LaravelMailChecker\Rules;

use Illuminate\Contracts\Validation\ValidationRule;

abstract class AbstractMailValidator implements ValidationRule
{
	protected MailChecker $mailChecker;

	/**
	 * Run the validation rule.
	 */
	public function validate(string $attribute, mixed $value, Closure $fail): void
	{

	}
}
