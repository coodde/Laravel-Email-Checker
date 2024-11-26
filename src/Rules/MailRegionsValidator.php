<?php

namespace Coodde\LaravelMailChecker\Rules;

use Coodde\MailChecker\MailChecker;

class MailRegionsValidator extends AbstractMailValidator
{
    public function __construct(?array $regions = null)
    {
        if ($regions === null) {
            $domains = config('mail-checker.rules.domains');
        }
        $this->mailChecker = new MailChecker([], $regions, []);
    }

    /**
     * Run the validation rule.
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if ($this->mailChecker->forbidden($value)) {
            $fail('The :attribute has email from forbidden region.');
        }
    }
}
