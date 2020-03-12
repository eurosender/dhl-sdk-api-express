<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data\Response\Rate;

use DateTime;
use Dhl\Express\Webservice\Soap\Type\RateResponse\Provider\Service\Charges\Charge;

/**
 * Rate Response Item Interface.
 *
 * DTO that carries web service operation results.
 *
 * @api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface RateInterface
{
    /**
     * Returns the service code.
     *
     * @return string
     */
    public function getServiceCode();

    /**
     * Returns the label.
     *
     * @return string
     */
    public function getLabel();

    /**
     * Returns the amount.
     *
     * @return float
     */
    public function getAmount();

    /**
     * Returns the currency code.
     *
     * @return string
     */
    public function getCurrencyCode();

    /**
     * Returns the delivery date/time.
     *
     * @return DateTime|null
     */
    public function getDeliveryTime();

	/**
	 * Returns the cutoff date/time.
	 *
	 * @return DateTime|null
	 */
	public function getCutoffTime();

	/**
	 * @return Charge[]
	 */
	public function getAppliedCharges();
}
