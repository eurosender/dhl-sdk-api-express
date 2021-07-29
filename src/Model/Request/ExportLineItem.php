<?php

namespace Dhl\Express\Model\Request;

use Dhl\Express\Api\Data\Request\ExportLineItemInterface;

/**
 * Export line item.
 *
 * @api
 * @author   Marko Slavec <marko.slavec@eurosender.com>
 * @link     https://eurosender.com
 */
class ExportLineItem implements ExportLineItemInterface
{
	/**
	 * @var float
	 */
	private $grossWeight;

	/**
	 * @var string
	 */
	private $manufacturingCountryCode;

	/**
	 * @var string
	 */
	private $quantityUnitOfMeasurement;

	/**
	 * @var string|null
	 */
	private $commodityCode;

	/**
	 * @var int
	 */
	private $quantity;

	/**
	 * @var float
	 */
	private $unitPrice;

	/**
	 * @var string
	 */
	private $itemDescription;

	/**
	 * @var int
	 */
	private $itemNumber;

	/**
	 * @var float
	 */
	private $netWeight;

	/**
	 * ExportLineItem constructor.
	 *
	 * @param float       $grossWeight
	 * @param string      $manufacturingCountryCode
	 * @param string      $quantityUnitOfMeasurement
	 * @param string|null $commodityCode
	 * @param int         $quantity
	 * @param float       $unitPrice
	 * @param string      $itemDescription
	 * @param int         $itemNumber
	 * @param float       $netWeight
	 */
	public function __construct(
		$grossWeight,
		$manufacturingCountryCode,
		$quantityUnitOfMeasurement,
		$commodityCode,
		$quantity,
		$unitPrice,
		$itemDescription,
		$itemNumber,
		$netWeight
	) {
		$this->grossWeight = $grossWeight;
		$this->manufacturingCountryCode = $manufacturingCountryCode;
		$this->quantityUnitOfMeasurement = $quantityUnitOfMeasurement;
		$this->commodityCode = $commodityCode;
		$this->quantity = $quantity;
		$this->unitPrice = $unitPrice;
		$this->itemDescription = $itemDescription;
		$this->itemNumber = $itemNumber;
		$this->netWeight = $netWeight;
	}

	/**
	 * @return float
	 */
	public function getGrossWeight()
	{
		return $this->grossWeight;
	}

	/**
	 * @return string
	 */
	public function getManufacturingCountryCode()
	{
		return $this->manufacturingCountryCode;
	}

	/**
	 * @return string
	 */
	public function getQuantityUnitOfMeasurement()
	{
		return $this->quantityUnitOfMeasurement;
	}

	/**
	 * @return string|null
	 */
	public function getCommodityCode()
	{
		return $this->commodityCode;
	}

	/**
	 * @return int
	 */
	public function getQuantity()
	{
		return $this->quantity;
	}

	/**
	 * @return float
	 */
	public function getUnitPrice()
	{
		return $this->unitPrice;
	}

	/**
	 * @return string
	 */
	public function getItemDescription()
	{
		return $this->itemDescription;
	}

	/**
	 * @return int
	 */
	public function getItemNumber()
	{
		return $this->itemNumber;
	}

	/**
	 * @return float
	 */
	public function getNetWeight()
	{
		return $this->netWeight;
	}
}