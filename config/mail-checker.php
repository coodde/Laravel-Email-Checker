<?php

use Coodde\MailChecker\Regions;

return [
    'rules' => [
    	'categories' => explode(',', env('MAIL_CHECKER_CATEGORIES', 'dangerous')),
    	'regions' => explode(',', env('MAIL_CHECKER_REGIONS', implode(',', [Regions::RUSSIA, Regions::BELARUS, Regions::NORTH_KOREA, Regions::AFGHANISTAN, Regions::IRAN, Regions::SYRIA, Regions::SOVIET_UNION, Regions::CUBA]))),
    	'domains' => explode(',', env('MAIL_CHECKER_DOMAINS', '')),
    ],
];
