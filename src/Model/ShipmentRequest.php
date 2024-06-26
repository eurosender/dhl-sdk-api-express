<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model;

use Dhl\Express\Api\Data\Request\InsuranceInterface;
use Dhl\Express\Api\Data\Request\PackageInterface;
use Dhl\Express\Api\Data\Request\Shipment\DangerousGoods\DryIceInterface;
use Dhl\Express\Api\Data\Request\Shipment\ShipmentDetailsInterface;
use Dhl\Express\Api\Data\ShipmentRequestInterface;
use Dhl\Express\Model\Request\InternationalDetail;
use Dhl\Express\Model\Request\Recipient;
use Dhl\Express\Model\Request\Shipment\Shipper;

/**
 * Shipment Request.
 *
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ShipmentRequest implements ShipmentRequestInterface
{
	/**
	 * @var ShipmentDetailsInterface
	 */
	private $shipmentDetails;

	/**
	 * @var string
	 */
	private $payerAccountNumber;

	/**
	 * @var Shipper
	 */
	private $shipper;

	/**
	 * @var Recipient
	 */
	private $recipient;

	/**
	 * @var PackageInterface[]
	 */
	private $packages;

	/**
	 * @var InternationalDetail|null
	 */
	private $internationalDetail;

	/**
	 * @var null|string
	 */
	private $billingAccountNumber;

	/**
	 * @var null|InsuranceInterface
	 */
	private $insurance;

	/**
	 * @var null|DryIceInterface
	 */
	private $dryIce;

	/**
	 * @var string|null
	 */
	private $onDemandDeliveryServicePoint;

	/**
	 * @var string|null
	 */
	private $onDemandDeliveryInstructions;

	/**
	 * SoapShipmentRequest constructor.
	 *
	 * @param ShipmentDetailsInterface $shipmentDetails
	 * @param string $payerAccountNumber
	 * @param Shipper $shipper
	 * @param Recipient $recipient
	 * @param PackageInterface[] $packages
	 * @param InternationalDetail|null $internationalDetail
	 */
	public function __construct(
		ShipmentDetailsInterface $shipmentDetails,
		$payerAccountNumber,
		Shipper $shipper,
		Recipient $recipient,
		array $packages,
		$internationalDetail = null
	) {
		$this->shipmentDetails = $shipmentDetails;
		$this->payerAccountNumber = $payerAccountNumber;
		$this->shipper = $shipper;
		$this->recipient = $recipient;
		$this->packages = $packages;
		$this->internationalDetail = $internationalDetail;
	}

	public function getShipmentDetails()
	{
		return $this->shipmentDetails;
	}

	public function getPayerAccountNumber()
	{
		return (string) $this->payerAccountNumber;
	}

	public function getShipper()
	{
		return $this->shipper;
	}

	public function getRecipient()
	{
		return $this->recipient;
	}

	public function getPackages()
	{
		return $this->packages;
	}

	public function getBillingAccountNumber()
	{
		return (string) $this->billingAccountNumber;
	}

	public function getInsurance()
	{
		return $this->insurance;
	}

	public function getDryIce()
	{
		return $this->dryIce;
	}

	/**
	 * Sets the billing account number.
	 *
	 * @param string $billingAccountNumber The billing account number
	 *
	 * @return ShipmentRequest
	 */
	public function setBillingAccountNumber($billingAccountNumber)
	{
		$this->billingAccountNumber = $billingAccountNumber;

		return $this;
	}

	/**
	 * Sets the insurance instance.
	 *
	 * @param InsuranceInterface $insurance The insurance instance
	 *
	 * @return ShipmentRequest
	 */
	public function setInsurance(InsuranceInterface $insurance)
	{
		$this->insurance = $insurance;

		return $this;
	}

	/**
	 * Sets the dry ice instance.
	 *
	 * @param DryIceInterface $dryIce The dry ice instance
	 *
	 * @return ShipmentRequest
	 */
	public function setDryIce(DryIceInterface $dryIce)
	{
		$this->dryIce = $dryIce;

		return $this;
	}

	/**
	 * @return InternationalDetail|null
	 */
	public function getInternationalDetail()
	{
		return $this->internationalDetail;
	}

	public function getOnDemandDeliveryServicePoint()
	{
		return $this->onDemandDeliveryServicePoint;
	}

	public function setOnDemandDeliveryServicePoint($servicePointId)
	{
		$this->onDemandDeliveryServicePoint = $servicePointId;

		return $this;
	}

	public function getOnDemandDeliveryInstructions()
	{
		return $this->onDemandDeliveryInstructions;
	}

	/**
	 * @param string $onDemandDeliveryInstructions
	 *
	 * @return $this
	 */
	public function setOnDemandDeliveryInstructions($onDemandDeliveryInstructions)
	{
		$this->onDemandDeliveryInstructions = $onDemandDeliveryInstructions;

		return $this;
	}
}
