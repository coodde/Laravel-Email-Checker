<a id="readme-top"></a>

<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![Apache 2 License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]


<!-- PROJECT LOGO -->
<br />
<div align="center">
  <h2 align="center">Laravel Email Checker</h2>

  <p align="center">
    Validates email addresses belong to their domain.
    <br />
    <br />
    <a href="https://github.com/coodde/Laravel-Email-Checker/issues/new?labels=bug&template=bug-report---.md">Report Bug</a>
    ·
    <a href="https://github.com/coodde/Laravel-Email-Checker/issues/new?labels=enhancement&template=feature-request---.md">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Package</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#requires">Requires</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

Flexible and simple library for checking email addresses. Usual framework validators are usually checking email correctness, but this library is implementing other kind of validation.

It can check is mail:
* registered in mail provider from forbidden country;
* registered in forbidden domain (all possible levels);
* used for spam or scam (dangerous), temporary, had suspicious behaviour, is registered on paid or public (like gmail) mail provider.

Of course, you can always propose new domains to add into listed in the "data" directory.

Key feautures:
* fast search - binary search in the pre-sorted dictionaries (in comparison with other popular libraries with linear search)
* flexible configurations - not only one strict list
* low memory usage - disctionaries are not loaded fully into memory (as in other popular libraries)
* frequent updates
* easy collaboration
* large disctionary- 60k+ of domains (not only public email providers) in the dictionary

<p align="right">(<a href="#readme-top">back to top</a>)</p>



### Built With

This library supports several languages and frameworks.

* PHP
  * [![Vanilla][PHP.com]][Vanilla-url]
  * Laravel (current)
  * Symfony (planned)
  * Phalcon (planned)
* JS / TS
  * Vanilla (planned)
  * [![Next][Next.js]][Next-url] (planned)
  * [![React][React.js]][React-url] (planned)
  * [![Vue][Vue.js]][Vue-url] (planned)
  * [![Angular][Angular.io]][Angular-url] (planned)
  * [![Svelte][Svelte.dev]][Svelte-url] (planned)
* Ruby
  * Ruby on Rails (planned)
* Perl
  * Vanilla (planned)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

Simple steps to start use the library.


### Requires

Check that library works on your PHP version:

* PHP 8.0+
* Composer


### Installation

_Below is an simple list of step to install library._

1. Open your project directory in the terminal
2. Install package
```bash
composer require coodde/laravel-mail-checker
```
3. Check your `composer.json` file
3. Check your app.php, that ServiceProvider is installed
3. Check your `config` directory, that config file `mail-checker.php` is created

<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- USAGE EXAMPLES -->
## Usage

This table will help to understand possible usage of library and all default values:

| Params | Validator classes | Validator names | Default Value | Possible Values | Description |
| --- | --- | --- | --- | --- | --- |
| categories | `Coodde\LaravelMailChecker\Rules\MailListedValidation`<br/>`Coodde\LaravelMailChecker\Rules\MailValidation` | `mail_check_listed`, `mail_check` | [Regions::CATEGORY_DANGEROUS] | MailListedValidator::CATEGORY_PUBLIC<br/>MailListedValidator::CATEGORY_PAID<br/>MailListedValidator::CATEGORY_TEMPORARY<br/>MailListedValidator::CATEGORY_SUSPICIOUS<br/>MailListedValidator::CATEGORY_DANGEROUS | For more comfortable usage all mail providers are split into several lists |
| domains | `Coodde\LaravelMailChecker\Rules\MailDomainsValidation`<br/>`Coodde\LaravelMailChecker\Rules\MailValidation` | `mail_check_domains`, `mail_check` | [] | * | Any kind of domains, starting by top level domains like "com" or "net", and finishing by exact domains like "mail.ru" |
| regions | `Coodde\LaravelMailChecker\Rules\MailRegionsValidation`<br/>`Coodde\LaravelMailChecker\Rules\MailValidation` | `mail_check_regions`, `mail_check` | [ Regions::RUSSIA, Regions::BELARUS, Regions::NORTH_KOREA, Regions::AFGHANISTAN, Regions::IRAN, Regions::SYRIA, Regions::SOVIET_UNION, Regions::CUBA ] | Regions::ASCENSION_ISLAND<br/>Regions::ANDORRA<br/>Regions::UNITED_ARAB_EMIRATES<br/>Regions::UAE<br/>Regions::AFGHANISTAN<br/>Regions::ANTIGUA_AND_BARBUDA<br/>Regions::ANGUILLA<br/>Regions::ALBANIA<br/>Regions::ARMENIA<br/>Regions::ANGOLA<br/>Regions::ANTARCTICA<br/>Regions::ARGENTINA<br/>Regions::AMERICAN_SAMOA<br/>Regions::AUSTRIA<br/>Regions::AUSTRALIA<br/>Regions::ARUBA<br/>Regions::ALAND<br/>Regions::AZERBAIJAN<br/>Regions::BOSNIA_AND_HERZEGOVINA<br/>Regions::BARBADOS<br/>Regions::BANGLADESH<br/>Regions::BELGIUM<br/>Regions::BURKINA_FASO<br/>Regions::BULGARIA<br/>Regions::BAHRAIN<br/>Regions::BURUNDI<br/>Regions::BENIN<br/>Regions::BERMUDA<br/>Regions::BRUNEI<br/>Regions::BOLIVIA<br/>Regions::CARIBBEAN_NETHERLANDS<br/>Regions::BRAZIL<br/>Regions::BAHAMAS<br/>Regions::BHUTAN<br/>Regions::BOTSWANA<br/>Regions::BELARUS<br/>Regions::BELIZE<br/>Regions::CANADA<br/>Regions::COCOS_ISLANDS<br/>Regions::DEMOCRATIC_REPUBLIC_OF_THE_CONGO<br/>Regions::CENTRAL_AFRICAN_REPUBLIC<br/>Regions::REPUBLIC_OF_THE_CONGO<br/>Regions::SWITZERLAND<br/>Regions::IVORY_COAST<br/>Regions::COOK_ISLANDS<br/>Regions::CHILE<br/>Regions::CAMEROON<br/>Regions::CHINA<br/>Regions::COLOMBIA<br/>Regions::COSTA_RICA<br/>Regions::CUBA<br/>Regions::CAPE_VERDE<br/>Regions::CURACAO<br/>Regions::CHRISTMAS_ISLAND<br/>Regions::CYPRUS<br/>Regions::CZECH_REPUBLIC<br/>Regions::GERMANY<br/>Regions::DJIBOUTI<br/>Regions::DENMARK<br/>Regions::DOMINICA<br/>Regions::DOMINICAN_REPUBLIC<br/>Regions::ALGERIA<br/>Regions::ECUADOR<br/>Regions::ESTONIA<br/>Regions::EGYPT<br/>Regions::WESTERN_SAHARA<br/>Regions::ERITREA<br/>Regions::SPAIN<br/>Regions::ETHIOPIA<br/>Regions::EUROPEAN_UNION<br/>Regions::FINLAND<br/>Regions::FIJI<br/>Regions::FALKLAND_ISLANDS<br/>Regions::FEDERATED_STATES_OF_MICRONESIA<br/>Regions::FAROE_ISLANDS<br/>Regions::FRANCE<br/>Regions::GABON<br/>Regions::GRENADA<br/>Regions::GEORGIA<br/>Regions::FRENCH_GUIANA<br/>Regions::GUERNSEY<br/>Regions::GHANA<br/>Regions::GIBRALTAR<br/>Regions::GREENLAND<br/>Regions::THE_GAMBIA<br/>Regions::GUINEA<br/>Regions::GUADELOUPE<br/>Regions::EQUATORIAL_GUINEA<br/>Regions::GREECE<br/>Regions::SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS<br/>Regions::GUATEMALA<br/>Regions::GUAM<br/>Regions::GUINEA_BISSAU<br/>Regions::GUYANA<br/>Regions::HONG_KONG<br/>Regions::HEARD_ISLAND_AND_MCDONALD_ISLANDS<br/>Regions::HONDURAS<br/>Regions::CROATIA<br/>Regions::HAITI<br/>Regions::HUNGARY<br/>Regions::INDONESIA<br/>Regions::IRELAND<br/>Regions::ISRAEL<br/>Regions::ISLE_OF_MAN<br/>Regions::INDIA<br/>Regions::BRITISH_INDIAN_OCEAN_TERRITORY<br/>Regions::IRAQ<br/>Regions::IRAN<br/>Regions::ICELAND<br/>Regions::ITALY<br/>Regions::JERSEY<br/>Regions::JAMAICA<br/>Regions::JORDAN<br/>Regions::JAPAN<br/>Regions::KENYA<br/>Regions::KYRGYZSTAN<br/>Regions::CAMBODIA<br/>Regions::KIRIBATI<br/>Regions::COMOROS<br/>Regions::SAINT_KITTS_AND_NEVIS<br/>Regions::NORTH_KOREA<br/>Regions::SOUTH_KOREA<br/>Regions::KUWAIT<br/>Regions::CAYMAN_ISLANDS<br/>Regions::KAZAKHSTAN<br/>Regions::LAOS<br/>Regions::LEBANON<br/>Regions::SAINT_LUCIA<br/>Regions::LIECHTENSTEIN<br/>Regions::SRI_LANKA<br/>Regions::LIBERIA<br/>Regions::LESOTHO<br/>Regions::LITHUANIA<br/>Regions::LUXEMBOURG<br/>Regions::LATVIA<br/>Regions::LIBYA<br/>Regions::MOROCCO<br/>Regions::MONACO<br/>Regions::MOLDOVA<br/>Regions::MONTENEGRO<br/>Regions::MADAGASCAR<br/>Regions::MARSHALL_ISLANDS<br/>Regions::NORTH_MACEDONIA<br/>Regions::MALI<br/>Regions::MYANMAR<br/>Regions::MONGOLIA<br/>Regions::MACAU<br/>Regions::NORTHERN_MARIANA_ISLANDS<br/>Regions::MARTINIQUE<br/>Regions::MAURITANIA<br/>Regions::MONTSERRAT<br/>Regions::MALTA<br/>Regions::MAURITIUS<br/>Regions::MALDIVES<br/>Regions::MALAWI<br/>Regions::MEXICO<br/>Regions::MALAYSIA<br/>Regions::MOZAMBIQUE<br/>Regions::NAMIBIA<br/>Regions::NEW_CALEDONIA<br/>Regions::NIGER<br/>Regions::NORFOLK_ISLAND<br/>Regions::NIGERIA<br/>Regions::NICARAGUA<br/>Regions::NETHERLANDS<br/>Regions::NORWAY<br/>Regions::NEPAL<br/>Regions::NAURU<br/>Regions::NIUE<br/>Regions::NEW_ZEALAND<br/>Regions::OMAN<br/>Regions::PANAMA<br/>Regions::PERU<br/>Regions::FRENCH_POLYNESIA<br/>Regions::PAPUA_NEW_GUINEA<br/>Regions::PHILIPPINES<br/>Regions::PAKISTAN<br/>Regions::POLAND<br/>Regions::SAINT_PIERRE_AND_MIQUELON<br/>Regions::PITCAIRN_ISLANDS<br/>Regions::PUERTO_RICO<br/>Regions::PALESTINE<br/>Regions::PORTUGAL<br/>Regions::PALAU<br/>Regions::PARAGUAY<br/>Regions::QATAR<br/>Regions::RÉUNION<br/>Regions::ROMANIA<br/>Regions::SERBIA<br/>Regions::RUSSIA<br/>Regions::RWANDA<br/>Regions::SAUDI_ARABIA<br/>Regions::SOLOMON_ISLANDS<br/>Regions::SEYCHELLES<br/>Regions::SUDAN<br/>Regions::SWEDEN<br/>Regions::SINGAPORE<br/>Regions::SAINT_HELENA_ASCENSION_AND_TRISTAN_DA_CUNHA<br/>Regions::SAINT_HELENA<br/>Regions::SLOVENIA<br/>Regions::SLOVAKIA<br/>Regions::SIERRA_LEONE<br/>Regions::SAN_MARINO<br/>Regions::SENEGAL<br/>Regions::SOMALIA<br/>Regions::SURINAME<br/>Regions::SOUTH_SUDAN<br/>Regions::SAO_TOME_AND_PRINCIPE<br/>Regions::SOVIET_UNION<br/>Regions::EL_SALVADOR<br/>Regions::SINT_MAARTEN<br/>Regions::SYRIA<br/>Regions::ESWATINI<br/>Regions::TURKS_AND_CAICOS_ISLANDS<br/>Regions::CHAD<br/>Regions::FRENCH_SOUTHERN_AND_ANTARCTIC_LANDS<br/>Regions::TOGO<br/>Regions::THAILAND<br/>Regions::TAJIKISTAN<br/>Regions::TOKELAU<br/>Regions::EAST_TIMOR<br/>Regions::TURKMENISTAN<br/>Regions::TUNISIA<br/>Regions::TONGA<br/>Regions::TURKEY<br/>Regions::TRINIDAD_AND_TOBAGO<br/>Regions::TUVALU<br/>Regions::TAIWAN<br/>Regions::TANZANIA<br/>Regions::UKRAINE<br/>Regions::UGANDA<br/>Regions::UNITED_KINGDOM<br/>Regions::UNITED_STATES_OF_AMERICA<br/>Regions::USA<br/>Regions::URUGUAY<br/>Regions::UZBEKISTAN<br/>Regions::VATICAN_CITY<br/>Regions::SAINT_VINCENT_AND_THE_GRENADINES<br/>Regions::VENEZUELA<br/>Regions::BRITISH_VIRGIN_ISLANDS<br/>Regions::UNITED_STATES_VIRGIN_ISLANDS<br/>Regions::VIETNAM<br/>Regions::VANUATU<br/>Regions::WALLIS_AND_FUTUNA<br/>Regions::SAMOA<br/>Regions::YEMEN<br/>Regions::MAYOTTE<br/>Regions::SOUTH_AFRICA<br/>Regions::ZAMBIA<br/>Regions::ZIMBABWE | Recommended to use constants for easier code maintenance |


Here you will find different cases of usage.

Checking that mail address registered in Russian mail provider:
```php
use Coodde\LaravelMailChecker\Rules\MailRegionsValidation;
use Coodde\LaravelMailChecker\Regions;

public function store(Request $request): RedirectResponse
{
    $validated = $request->validate([
        'email' => ['required', new MailRegionsValidation([Regions::RUSSIA])],
    ]);
 
    // OR with configs from env, ex. (country code) - MAIL_CHECKER_REGIONS=ru

    $validated = $request->validate([
        'email' => ['required', new MailRegionsValidation()],
    ]);
 
    // Request is valid...
 
    return redirect('/list');
}
```

Checking that mail address registered in "ru" or "mail.by" domains:
```php
use Coodde\LaravelMailChecker\Rules\MailDomainsValidation;
use Coodde\LaravelMailChecker\Regions;

public function store(Request $request): RedirectResponse
{
    $validated = $request->validate([
        'email' => ['required', new MailDomainsValidation(['ru', 'mail.by'])],
    ]);
 
    // OR with configs from env, ex. - MAIL_CHECKER_DOMAINS=ru,mail.by

    $validated = $request->validate([
        'email' => ['required', new MailDomainsValidation()],
    ]);

    // Request is valid...
 
    return redirect('/list');
}
```

Checking that mail address is placed in dangerous or suspicious lists:
```php
use Coodde\LaravelMailChecker\Rules\MailListedValidation;
use Coodde\LaravelMailChecker\Regions;

public function store(Request $request): RedirectResponse
{
    $validated = $request->validate([
        'email' => ['required', new MailListedValidation([MailListedValidation::CATEGORY_DANGEROUS, MailListedValidation::CATEGORY_SUSPICIOUS])],
    ]);

    // OR with configs from env, ex. - MAIL_CHECKER_CATEGORIES=dangerous,suspicious

    $validated = $request->validate([
        'email' => ['required', new MailListedValidation()],
    ]);
 
    // Request is valid...
 
    return redirect('/list');
}
```

Complex validation to allow only corporate emails, :
```php
use Coodde\LaravelMailChecker\Rules\MailValidation;
use Coodde\LaravelMailChecker\Regions;

public function store(Request $request): RedirectResponse
{
    $validated = $request->validate([
        'email' => [
        	'required',
        	new MailValidation(
        		[
        			MailListedValidation::CATEGORY_DANGEROUS,
        			MailListedValidation::CATEGORY_SUSPICIOUS,
        			MailListedValidation::CATEGORY_TEMPORARY,
        			MailListedValidation::CATEGORY_PAID,
        			MailListedValidation::CATEGORY_PUBLIC,
        		],
        		[
        			'fb.com',
        		],
        		[
        			Regions::RUSSIA,
        			Regions::BELARUS,
        		],
        	),
       	],
    ]);

    // OR with separate validators

    $validated = $request->validate([
        'email' => [
        	'required',
        	new MailListedValidation([
    			MailListedValidation::CATEGORY_DANGEROUS,
    			MailListedValidation::CATEGORY_SUSPICIOUS,
    			MailListedValidation::CATEGORY_TEMPORARY,
    			MailListedValidation::CATEGORY_PAID,
    			MailListedValidation::CATEGORY_PUBLIC,
        	]),
        	new MailDomainsValidation([
    			'fb.com',
    		]),
        	new MailRegionsValidation([
    			Regions::RUSSIA,
    			Regions::BELARUS,
    		]),
       	],
    ]);
 
    // Request is valid...
 
    return redirect('/list');
}
```

_Of course you can combine restrictioned domains, countries, and categories_

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ROADMAP -->
## Roadmap

- [x] Checking by countries
- [x] Checking by domains
- [x] Prepared lists
    - [x] Dangerous - usually scaming servers / domains
    - [x] Suspicios - usually spaming servers / domains
    - [x] Paid - mail providers with non-free subscription
    - [x] Temporary - services for mails which will be removed soon after creation
    - [x] Public - popular free services like gmail, outlook, etc
- [ ] Checking by prepaired lists
    - [x] From files - it uses binary search without file content buffering
    - [ ] From cache - cache files with lists compiled into php file
    - [ ] From memory - storing lists in memcache
    - [ ] From database - by using PDO library+

See the [open issues](https://github.com/coodde/Laravel-Email-Checker/issues) for a full list of proposed features (and known issues).

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request


✅ Run refactors using **Rector**
```bash
composer refacto
```

⚗️ Run static analysis using **PHPStan**:
```bash
composer test:types
```

✅ Run unit tests using **PEST**
```bash
composer test:unit
```

🚀 Run the entire test suite:
```bash
composer test
```

### Top contributors:

<a href="https://github.com/coodde/Laravel-Email-Checker/graphs/contributors">
  <img src="https://contrib.rocks/image?repo=coodde/Laravel-Email-Checker" alt="contrib.rocks image" />
</a>

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- LICENSE -->
## License

Distributed under the Apache 2.0 License. See `LICENSE` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTACT -->
## Contact

Svyatoslav Ryzhok - info@coodde.com

Platform Link: [https://coodde.com](https://coodde.com)

<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/coodde/Laravel-Email-Checker.svg?style=for-the-badge
[contributors-url]: https://github.com/coodde/Laravel-Email-Checker/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/coodde/Laravel-Email-Checker.svg?style=for-the-badge
[forks-url]: https://github.com/coodde/Laravel-Email-Checker/network/members
[stars-shield]: https://img.shields.io/github/stars/coodde/Laravel-Email-Checker.svg?style=for-the-badge
[stars-url]: https://github.com/coodde/Laravel-Email-Checker/stargazers
[issues-shield]: https://img.shields.io/github/issues/coodde/Laravel-Email-Checker.svg?style=for-the-badge
[issues-url]: https://github.com/coodde/Laravel-Email-Checker/issues
[license-shield]: https://img.shields.io/github/license/coodde/Laravel-Email-Checker.svg?style=for-the-badge
[license-url]: https://github.com/coodde/Laravel-Email-Checker/blob/master/LICENSE
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://www.linkedin.com/groups/12553924/
[product-screenshot]: images/screenshot.png
[Next.js]: https://img.shields.io/badge/next.js-000000?style=for-the-badge&logo=nextdotjs&logoColor=white
[Next-url]: https://nextjs.org/
[React.js]: https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB
[React-url]: https://reactjs.org/
[Vue.js]: https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D
[Vue-url]: https://vuejs.org/
[Angular.io]: https://img.shields.io/badge/Angular-DD0031?style=for-the-badge&logo=angular&logoColor=white
[Angular-url]: https://angular.io/
[Svelte.dev]: https://img.shields.io/badge/Svelte-4A4A55?style=for-the-badge&logo=svelte&logoColor=FF3E00
[Svelte-url]: https://svelte.dev/
[PHP.com]: https://img.shields.io/badge/PHP-FF2D20?style=for-the-badge&logo=PHP&logoColor=white
[Vanilla-url]: https://github.com/coodde/PHP-Email-Checker
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
