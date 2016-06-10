<?php

/**
 * ReportingCloud PHP Wrapper
 *
 * Official wrapper (authored by Text Control GmbH, publisher of ReportingCloud) to access ReportingCloud in PHP.
 *
 * @link      http://www.reporting.cloud to learn more about ReportingCloud
 * @link      https://github.com/TextControl/txtextcontrol-reportingcloud-php for the canonical source repository
 * @license   https://raw.githubusercontent.com/TextControl/txtextcontrol-reportingcloud-php/master/LICENSE.md
 * @copyright © 2016 Text Control GmbH
 */
namespace TxTextControl\ReportingCloud\Validator;

use Zend\Validator\Between as BetweenValidator;
use TxTextControl\ReportingCloud\Validator\TypeInteger as TypeIntegerValidator;

/**
 * Timestamp validator
 *
 * @package TxTextControl\ReportingCloud
 * @author  Jonathan Maron (@JonathanMaron)
 */
class Timestamp extends AbstractValidator
{
    /**
     * Invalid type
     *
     * @const INVALID_TYPE
     */
    const INVALID_TYPE  = 'invalidType';

    /**
     * Invalid range
     *
     * @const INVALID_RANGE
     */
    const INVALID_RANGE = 'invalidRange';

    /**
     * Message templates
     * 
     * @var array
     */
    protected $messageTemplates = [
        self::INVALID_TYPE  => "'%value%' must be an integer",
        self::INVALID_RANGE => "'%value%' is not in the required range",
    ];

    /**
     * Returns true, if value is valid. False otherwise.
     *
     * @param mixed $value
     *
     * @return bool
     */
    public function isValid($value)
    {
        $this->setValue($value);

        $typeIntegerValidator = new TypeIntegerValidator();

        if (!$typeIntegerValidator->isValid($value)) {
            $this->error(self::INVALID_TYPE);
            return false;
        }

        $betweenValidator = new BetweenValidator([
             'min'       => 0,
             'max'       => PHP_INT_MAX,
             'inclusive' => true
        ]);

        if (!$betweenValidator->isValid($value)) {
            $this->error(self::INVALID_RANGE);
            return false;
        }

        return true;
    }
}