<?php

namespace Coodde\LaravelMailChecker\Rules;

use Coodde\MailChecker\MailChecker;

class MailListedValidator extends AbstractMailValidator
{
    public const CATEGORY_PUBLIC = MailChecker::CATEGORY_PUBLIC;// 'public';

    public const CATEGORY_DANGEROUS = MailChecker::CATEGORY_DANGEROUS;// 'dangerous';

    public const CATEGORY_SUSPICIOUS = MailChecker::CATEGORY_SUSPICIOUS;// 'suspicious';

    public const CATEGORY_PAID = MailChecker::CATEGORY_PAID;// 'paid';

    public const CATEGORY_TEMPORARY = MailChecker::CATEGORY_TEMPORARY;// 'temporary';

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
