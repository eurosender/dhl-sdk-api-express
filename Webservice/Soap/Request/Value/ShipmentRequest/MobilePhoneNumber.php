<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest;

use Dhl\Express\Webservice\Soap\Request\Value\AlphaNumeric;

/**
 * The mobile phone number type.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class MobilePhoneNumber extends AlphaNumeric
{
    protected const MAX_LENGTH = 25;
}