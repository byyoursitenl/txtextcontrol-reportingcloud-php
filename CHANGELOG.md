![Logo](./data/rc_logo_512.png)

# CHANGELOG

## dev-master

## 1.7.0 - 2018-01-25

* Added method `uploadTemplateFromBase64($data, $templateName)` to upload templates stored in a string, in addition to on the filesystem.
* Added `Base64Data` validator to validate `$data` passed to `uploadTemplateFromBase64($data, $templateName)`.
* Refactored `uploadTemplate($templateFilename)` to use `uploadTemplateFromBase64($data, $templateName)`.

## 1.6.1 - 2018-01-19

* Updated phpunit configuration.
* Added PDF/A return format `PDFA` to `TxTextControl\ReportingCloud\Validator\ReturnFormat`. 

## 1.6.0 - 2018-01-14

* Split `ReportingCloud\ReportingCloud` into multiple Traits.
* Added `PHP_CodeSniffer` to ensure consistency in code formatting.
* Added Composer script `composer test` to run unit tests.
* Added Composer script `composer phpcs` to run `PHP_CodeSniffer`.
* Merged `media` directory to `data` directory.
* Implemented [end-points](https://www.textcontrol.com/blog/2017/12/29/):
    * `/v1/account/apikeys`
    * `/v1/account/apikey`
* Implemented [authorization header](https://www.textcontrol.com/blog/2017/12/29/) `ReportingCloud-APIKey`.
* Updated Scrutinizer configuration to run tests in multiple PHP versions.
* Updated copyright year to 2018.

## 1.5.2 - 2017-10-16

* Refactored `Culture` and `Language` validators, abstracting common logic.
* Refactored `/bin/buid-culture.php` and `/bin/buid-dictionaries.php`, abstracting common logic.

## 1.5.1 - 2017-10-15

* Deployed `Culture` validator.

## 1.5.0 - 2017-10-15

* Implemented the key [culture](https://www.textcontrol.com/blog/2017/10/13/) in `mergeSettings`.
* Restructured the `resources` directory.

## 1.4.0 - 2017-10-02

* Implemented [end-points](https://www.textcontrol.com/blog/2017/08/23/):
    * `/v1/proofing/check`
    * `/v1/proofing/availabledictionaries`
    * `/v1/proofing/suggestions`
* Updated `AccountSettings` property map with keys:
    * `proofing_transactions`
    * `max_proofing_transactions`
* Refactored `Validator` unit tests.
* Added script to download and build _available dictionaries_ resource file.
 
## 1.3.4 - 2017-08-22

* Implemented the `mergeSettings` option `merge_html`.
* Minor updates to DocBlock documentation.
* Improved code formatting quality.

## 1.3.3 - 2017-05-02

* Simplification of auto-loading for files in `/bin`, `/demo` and `/test`.  

## 1.3.2 - 2017-05-02

* Unified auto-loading for files in `/bin`, `/demo` and `/test`.
* Updated and added documentation.

## 1.3.1 - 2017-04-05

* Updated and added documentation.
* Removed Travis Building. See `/doc/travis.md`.

## 1.3.0 - 2017-04-05

* Implemented end-point `/v1/fonts/list`. 

## 1.2.0 - 2017-02-25

* Updated `zendframework/zend-servicemanager` to `^3.2`. 
* Added an image merging `mergeDocument()` demo.
* Added script to `/bin` directory that reports on the environment in which it is running.
* Added a basic `mergeDocument()` demo.
* Renamed the advanced `mergeDocument()` demo.
* Added documentation.

## 1.1.0 - 2016-10-17

* Added new tests to check properties returned by `getTemplateInfo()` and `getAccountSettings()`.
* Minor refactoring of `StaticFilter` and `StaticValidator` components.
* Minor refactoring, mainly of array iterations.
* Added filter to convert boolean true and false to string 'true' and 'false' (required for compatibilty with backend).
* Implemented 'test' parameter with property `/test` and related setter and getter.
* Added unit tests for `findAndReplaceDocument()` method.
* Refactored `mergeDocument()` and `findAndReplaceDocument()` methods.
* Implemented end-point `/v1/document/findandreplace`.
* Set default `Content-Type` HTTP header.

## 1.0.12 - 2016-08-30

* Implemented end-point `/v1/templates/info`. 

## 1.0.11 - 2016-08-16

* Removed non-essential development dependencies from `composer.json`.
* Set scrutinizer-ci to run tests and report on code coverage.

## 1.0.10 - 2016-07-20

* Moved orphaned helper functions (`reporting_cloud_*`) to helper class `TxTextControl\ReportingCloud\Console\Helper`.

## 1.0.9 - 2016-07-18

* Various minor code fixes following Scrutinizer and Coveralls integration.
* Added unit tests to test all return formats in `mergeDocument()` and `convertDocument()` methods.
* In unit tests migrated from `assertEquals()` to `assertSame()`.

## 1.0.8 - 2016-06-21

* Switched protocol from HTTP to HTTPS for all communication with the backend, now the backend supports it.
* Abstracted all parameter validation to `TxTextControl\ReportingCloud\Validator\StaticValidator` 
* Made `TxTextControl\ReportingCloud\Validator` properties consistent.

## 1.0.7 - 2016-06-08

* Made `TxTextControl\ReportingCloud\Validator` properties consistent with those in `Zend\Validator`.
* Updated `composer.json` to be installable on PHP 7.0.7.
* Improved date/time conversion `Filter` components.
* Added empty `CONTRIBUTING.md` file.
* Documentation update.
* Switched from `dump()` to `var_dump()` in `/demo` directory, as `symfony/var-dumper` is a development dependency only.
* Abstracted all date/time conversion to their own Filter components.

## 1.0.6 - 2016-06-02

* Documentation fixes.
* Added validation of file extension to all occurrences of `$templateFilename` and `$documentFilename`.

## 1.0.5 - 2016-06-01

* Documentation fixes.

## 1.0.4 - 2016-06-01

* First public release.

## 1.0.3 - 2016-06-01

* Implemented end-point `/v1/templates/pagecount`.
* Implemented end-point `/v1/templates/exists`.

## 1.0.2 - 2016-05-30

* Added `size` key to templateList.

## 1.0.1 - 2016-05-29

* Private testing only.

## 0.9.0 - 2016-05-27

* Private testing only.
