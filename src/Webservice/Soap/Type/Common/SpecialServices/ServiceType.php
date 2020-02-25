<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common\SpecialServices;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * The service code type.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ServiceType implements ValueInterface
{
    const MAX_NUMBER_OF_CHARS = 3;

    /**
     * Available service types.
     */
    /** @var string @TODO(nr) the code is actually II, but the API does not recognize it currently, therefore use INS */
    const TYPE_INSURANCE = 'INS';
    const TYPE_PAPERLESS = 'WY';

    /**
     * The service type.
     *
     * @var string
     */
    private $value;

    /**
     * Constructor.
     *
     * @param string $value The value
     *
     */
    public function __construct($value)
    {
        if (\strlen($value) > self::MAX_NUMBER_OF_CHARS) {
            throw new \InvalidArgumentException('The argument has to be max '.self::MAX_NUMBER_OF_CHARS.' letters service type');
        }

        $this->value = $value;
    }

    /**
     * Returns the value as string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}
