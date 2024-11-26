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
| regions | `Coodde\LaravelMailChecker\Rules\MailRegionsValidation`<br/>`Coodde\LaravelMailChecker\Rules\MailValidation` | `mail_check_regions`, `mail_check` | [ Regions::RUSSIA, Regions::BELARUS, Regions::NORTH_KOREA, Regions::AFGHANISTAN, Regions::IRAN, Regions::SYRIA, Regions::SOVIET_UNION, Regions::CUBA ] | <details><summary>All Available Regions</summary><ol><li>Regions::ASCENSION_ISLAND</li><li>Regions::ANDORRA</li><li>Regions::UNITED_ARAB_EMIRATES</li><li>Regions::UAE</li><li>Regions::AFGHANISTAN</li><li>Regions::ANTIGUA_AND_BARBUDA</li><li>Regions::ANGUILLA</li><li>Regions::ALBANIA</li><li>Regions::ARMENIA</li><li>Regions::ANGOLA</li><li>Regions::ANTARCTICA</li><li>Regions::ARGENTINA</li><li>Regions::AMERICAN_SAMOA</li><li>Regions::AUSTRIA</li><li>Regions::AUSTRALIA</li><li>Regions::ARUBA</li><li>Regions::ALAND</li><li>Regions::AZERBAIJAN</li><li>Regions::BOSNIA_AND_HERZEGOVINA</li><li>Regions::BARBADOS</li><li>Regions::BANGLADESH</li><li>Regions::BELGIUM</li><li>Regions::BURKINA_FASO</li><li>Regions::BULGARIA</li><li>Regions::BAHRAIN</li><li>Regions::BURUNDI</li><li>Regions::BENIN</li><li>Regions::BERMUDA</li><li>Regions::BRUNEI</li><li>Regions::BOLIVIA</li><li>Regions::CARIBBEAN_NETHERLANDS</li><li>Regions::BRAZIL</li><li>Regions::BAHAMAS</li><li>Regions::BHUTAN</li><li>Regions::BOTSWANA</li><li>Regions::BELARUS</li><li>Regions::BELIZE</li><li>Regions::CANADA</li><li>Regions::COCOS_ISLANDS</li><li>Regions::DEMOCRATIC_REPUBLIC_OF_THE_CONGO</li><li>Regions::CENTRAL_AFRICAN_REPUBLIC</li><li>Regions::REPUBLIC_OF_THE_CONGO</li><li>Regions::SWITZERLAND</li><li>Regions::IVORY_COAST</li><li>Regions::COOK_ISLANDS</li><li>Regions::CHILE</li><li>Regions::CAMEROON</li><li>Regions::CHINA</li><li>Regions::COLOMBIA</li><li>Regions::COSTA_RICA</li><li>Regions::CUBA</li><li>Regions::CAPE_VERDE</li><li>Regions::CURACAO</li><li>Regions::CHRISTMAS_ISLAND</li><li>Regions::CYPRUS</li><li>Regions::CZECH_REPUBLIC</li><li>Regions::GERMANY</li><li>Regions::DJIBOUTI</li><li>Regions::DENMARK</li><li>Regions::DOMINICA</li><li>Regions::DOMINICAN_REPUBLIC</li><li>Regions::ALGERIA</li><li>Regions::ECUADOR</li><li>Regions::ESTONIA</li><li>Regions::EGYPT</li><li>Regions::WESTERN_SAHARA</li><li>Regions::ERITREA</li><li>Regions::SPAIN</li><li>Regions::ETHIOPIA</li><li>Regions::EUROPEAN_UNION</li><li>Regions::FINLAND</li><li>Regions::FIJI</li><li>Regions::FALKLAND_ISLANDS</li><li>Regions::FEDERATED_STATES_OF_MICRONESIA</li><li>Regions::FAROE_ISLANDS</li><li>Regions::FRANCE</li><li>Regions::GABON</li><li>Regions::GRENADA</li><li>Regions::GEORGIA</li><li>Regions::FRENCH_GUIANA</li><li>Regions::GUERNSEY</li><li>Regions::GHANA</li><li>Regions::GIBRALTAR</li><li>Regions::GREENLAND</li><li>Regions::THE_GAMBIA</li><li>Regions::GUINEA</li><li>Regions::GUADELOUPE</li><li>Regions::EQUATORIAL_GUINEA</li><li>Regions::GREECE</li><li>Regions::SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS</li><li>Regions::GUATEMALA</li><li>Regions::GUAM</li><li>Regions::GUINEA_BISSAU</li><li>Regions::GUYANA</li><li>Regions::HONG_KONG</li><li>Regions::HEARD_ISLAND_AND_MCDONALD_ISLANDS</li><li>Regions::HONDURAS</li><li>Regions::CROATIA</li><li>Regions::HAITI</li><li>Regions::HUNGARY</li><li>Regions::INDONESIA</li><li>Regions::IRELAND</li><li>Regions::ISRAEL</li><li>Regions::ISLE_OF_MAN</li><li>Regions::INDIA</li><li>Regions::BRITISH_INDIAN_OCEAN_TERRITORY</li><li>Regions::IRAQ</li><li>Regions::IRAN</li><li>Regions::ICELAND</li><li>Regions::ITALY</li><li>Regions::JERSEY</li><li>Regions::JAMAICA</li><li>Regions::JORDAN</li><li>Regions::JAPAN</li><li>Regions::KENYA</li><li>Regions::KYRGYZSTAN</li><li>Regions::CAMBODIA</li><li>Regions::KIRIBATI</li><li>Regions::COMOROS</li><li>Regions::SAINT_KITTS_AND_NEVIS</li><li>Regions::NORTH_KOREA</li><li>Regions::SOUTH_KOREA</li><li>Regions::KUWAIT</li><li>Regions::CAYMAN_ISLANDS</li><li>Regions::KAZAKHSTAN</li><li>Regions::LAOS</li><li>Regions::LEBANON</li><li>Regions::SAINT_LUCIA</li><li>Regions::LIECHTENSTEIN</li><li>Regions::SRI_LANKA</li><li>Regions::LIBERIA</li><li>Regions::LESOTHO</li><li>Regions::LITHUANIA</li><li>Regions::LUXEMBOURG</li><li>Regions::LATVIA</li><li>Regions::LIBYA</li><li>Regions::MOROCCO</li><li>Regions::MONACO</li><li>Regions::MOLDOVA</li><li>Regions::MONTENEGRO</li><li>Regions::MADAGASCAR</li><li>Regions::MARSHALL_ISLANDS</li><li>Regions::NORTH_MACEDONIA</li><li>Regions::MALI</li><li>Regions::MYANMAR</li><li>Regions::MONGOLIA</li><li>Regions::MACAU</li><li>Regions::NORTHERN_MARIANA_ISLANDS</li><li>Regions::MARTINIQUE</li><li>Regions::MAURITANIA</li><li>Regions::MONTSERRAT</li><li>Regions::MALTA</li><li>Regions::MAURITIUS</li><li>Regions::MALDIVES</li><li>Regions::MALAWI</li><li>Regions::MEXICO</li><li>Regions::MALAYSIA</li><li>Regions::MOZAMBIQUE</li><li>Regions::NAMIBIA</li><li>Regions::NEW_CALEDONIA</li><li>Regions::NIGER</li><li>Regions::NORFOLK_ISLAND</li><li>Regions::NIGERIA</li><li>Regions::NICARAGUA</li><li>Regions::NETHERLANDS</li><li>Regions::NORWAY</li><li>Regions::NEPAL</li><li>Regions::NAURU</li><li>Regions::NIUE</li><li>Regions::NEW_ZEALAND</li><li>Regions::OMAN</li><li>Regions::PANAMA</li><li>Regions::PERU</li><li>Regions::FRENCH_POLYNESIA</li><li>Regions::PAPUA_NEW_GUINEA</li><li>Regions::PHILIPPINES</li><li>Regions::PAKISTAN</li><li>Regions::POLAND</li><li>Regions::SAINT_PIERRE_AND_MIQUELON</li><li>Regions::PITCAIRN_ISLANDS</li><li>Regions::PUERTO_RICO</li><li>Regions::PALESTINE</li><li>Regions::PORTUGAL</li><li>Regions::PALAU</li><li>Regions::PARAGUAY</li><li>Regions::QATAR</li><li>Regions::RÉUNION</li><li>Regions::ROMANIA</li><li>Regions::SERBIA</li><li>Regions::RUSSIA</li><li>Regions::RWANDA</li><li>Regions::SAUDI_ARABIA</li><li>Regions::SOLOMON_ISLANDS</li><li>Regions::SEYCHELLES</li><li>Regions::SUDAN</li><li>Regions::SWEDEN</li><li>Regions::SINGAPORE</li><li>Regions::SAINT_HELENA_ASCENSION_AND_TRISTAN_DA_CUNHA</li><li>Regions::SAINT_HELENA</li><li>Regions::SLOVENIA</li><li>Regions::SLOVAKIA</li><li>Regions::SIERRA_LEONE</li><li>Regions::SAN_MARINO</li><li>Regions::SENEGAL</li><li>Regions::SOMALIA</li><li>Regions::SURINAME</li><li>Regions::SOUTH_SUDAN</li><li>Regions::SAO_TOME_AND_PRINCIPE</li><li>Regions::SOVIET_UNION</li><li>Regions::EL_SALVADOR</li><li>Regions::SINT_MAARTEN</li><li>Regions::SYRIA</li><li>Regions::ESWATINI</li><li>Regions::TURKS_AND_CAICOS_ISLANDS</li><li>Regions::CHAD</li><li>Regions::FRENCH_SOUTHERN_AND_ANTARCTIC_LANDS</li><li>Regions::TOGO</li><li>Regions::THAILAND</li><li>Regions::TAJIKISTAN</li><li>Regions::TOKELAU</li><li>Regions::EAST_TIMOR</li><li>Regions::TURKMENISTAN</li><li>Regions::TUNISIA</li><li>Regions::TONGA</li><li>Regions::TURKEY</li><li>Regions::TRINIDAD_AND_TOBAGO</li><li>Regions::TUVALU</li><li>Regions::TAIWAN</li><li>Regions::TANZANIA</li><li>Regions::UKRAINE</li><li>Regions::UGANDA</li><li>Regions::UNITED_KINGDOM</li><li>Regions::UNITED_STATES_OF_AMERICA</li><li>Regions::USA</li><li>Regions::URUGUAY</li><li>Regions::UZBEKISTAN</li><li>Regions::VATICAN_CITY</li><li>Regions::SAINT_VINCENT_AND_THE_GRENADINES</li><li>Regions::VENEZUELA</li><li>Regions::BRITISH_VIRGIN_ISLANDS</li><li>Regions::UNITED_STATES_VIRGIN_ISLANDS</li><li>Regions::VIETNAM</li><li>Regions::VANUATU</li><li>Regions::WALLIS_AND_FUTUNA</li><li>Regions::SAMOA</li><li>Regions::YEMEN</li><li>Regions::MAYOTTE</li><li>Regions::SOUTH_AFRICA</li><li>Regions::ZAMBIA</li><li>Regions::ZIMBABWE</li></ol></details> | Recommended to use constants for easier code maintenance |


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
