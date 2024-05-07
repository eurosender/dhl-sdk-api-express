<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api\Data;

use Dhl\Express\Api\Data\Request\InsuranceInterface;
use Dhl\Express\Api\Data\Request\InternationalDetailInterface;
use Dhl\Express\Api\Data\Request\PackageInterface;
use Dhl\Express\Api\Data\Request\RecipientInterface;
use Dhl\Express\Api\Data\Request\Shipment\DangerousGoods\DryIceInterface;
use Dhl\Express\Api\Data\Request\Shipment\ShipmentDetailsInterface;
use Dhl\Express\Api\Data\Request\Shipment\ShipperInterface;
use Dhl\Express\Model\ShipmentRequest;

/**
 * Shipment Request Interface.
 *
 * DTO that carries relevant data for booking a shipment.
 *
 * @api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface ShipmentRequestInterface
{
	/**
	 * @return ShipmentDetailsInterface
	 */
	public function getShipmentDetails();

	/**
	 * @return string
	 */
	public function getPayerAccountNumber();

	/**
	 * @return string
	 */
	public function getBillingAccountNumber();

	/**
	 * @return null|InsuranceInterface
	 */
	public function getInsurance();

	/**
	 * @return ShipperInterface
	 */
	public function getShipper();

	/**
	 * @return RecipientInterface
	 */
	public function getRecipient();

	/**
	 * @return PackageInterface[]
	 */
	public function getPackages();

	/**
	 * @return null|DryIceInterface
	 */
	public function getDryIce();

	/**
	 * Sets the dry ice instance.
	 *
	 * @param DryIceInterface $dryIce The dry ice instance
	 *
	 * @return ShipmentRequest
	 */
	public function setDryIce(DryIceInterface $dryIce);

	/**
	 * @return InternationalDetailInterface|null
	 */
	public function getInternationalDetail();

	/**
	 * @return string|null
	 */
	public function getOnDemandDeliveryServicePoint();

	/**
	 * @param string $servicePoint
	 *
	 * @return $this
	 */
	public function setOnDemandDeliveryServicePoint($servicePoint);

	/**
	 * @return string
	 */
	public function getOnDemandDeliveryInstructions();

	/**
	 * @param string $onDemandDeliveryInstructions
	 *
	 * @return $this
	 */
	public function setOnDemandDeliveryInstructions($onDemandDeliveryInstructions);
}
