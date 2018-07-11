<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Test\Unit\Model;

use Dhl\Express\Model\RateResponse;
use Dhl\Express\Model\Response\Rate\Rate;
use PHPUnit\Framework\TestCase;

/**
 * @package  Dhl\Express\Test\Unit
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class RateResponseTest extends TestCase
{
    /**
     * @test
     */
    public function propertiesArePopulatedAndAccessible()
    {
        $rate1 = new Rate(
            $serviceCode = 'Q',
            $label = 'DHL Express',
            $amount = 233.03,
            $currency = 'GBP'
        );

        $rate2 = new Rate(
            $serviceCode = 'Y',
            $label = 'MEDICAL EXPRESS',
            $amount = 10.99,
            $currency = 'GBP'
        );

        $rates = [$rate1, $rate2];

        $rateResponse = new RateResponse($rates);

        $this->assertInstanceOf(RateResponse::class, $rateResponse);
        $this->assertSameSize($rates, $rateResponse->getRates());
        $this->assertEquals($rate1, $rateResponse->getRates()[0]);
        $this->assertEquals($rate2, $rateResponse->getRates()[1]);
    }
}
