<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\ExportLineItems;

use Dhl\Express\Webservice\Soap\Type\Common\Ship\Address\CountryCode;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\ExportLineItems\ExportLineItem\Description;

class ExportLineItem
{
	/**
	 * HS code for customs
	 *
	 * @var string|null
	 */
	private $CommodityCode;

	/**
	 * @var int
	 */
	private $ItemNumber;

	/**
	 * The description field is used as a description of goods for the label and manifest.
	 *
	 * @var Description
	 *
	 */
	private $ItemDescription;

	/**
	 * The country of manufacture.
	 *
	 * @var CountryCode
	 */
	private $ManufacturingCountryCode;

	/**
	 * The quantity.
	 *
	 * @var int
	 */
	private $Quantity;

	/**
	 * The unit price.
	 *
	 * @var float
	 */
	private $UnitPrice;

	/**
	 * Gross weight of single item
	 *
	 * @var Weight
	 */
	private $GrossWeight;

	/**
	 * Net weight of single item
	 *
	 * @var Weight
	 */
	private $NetWeight;

	/**
	 * PCS = pieces
	 *
	 * @var string
	 */
	private $QuantityUnitOfMeasurement;

	/**
	 * Constructor.
	 *
	 * @param string $description The description
	 */
	public function __construct($description)
	{
		$this->setDescription($description);
	}

	/**
	 * Returns the description.
	 *
	 * @return Description
	 */
	public function getDescription()
	{
		return $this->ItemDescription;
	}

	/**
	 * Sets the description.
	 *
	 * @param string $description The description
	 *
	 * @return self
	 */
	public function setDescription($description)
	{
		$this->ItemDescription = new Description($description);

		return $this;
	}

	/**
	 * Returns the country of manufacture.
	 *
	 * @return CountryCode
	 */
	public function getManufacturingCountryCode()
	{
		return $this->ManufacturingCountryCode;
	}

	/**
	 * Sets the country of manufacture.
	 *
	 * @param string $countryOfManufacture The country of manufacture
	 *
	 * @return self
	 */
	public function setManufacturingCountryCode($countryOfManufacture)
	{
		$this->ManufacturingCountryCode = new CountryCode($countryOfManufacture);

		return $this;
	}

	/**
	 * Returns the quantity.
	 *
	 * @return int
	 */
	public function getQuantity()
	{
		return $this->Quantity;
	}

	/**
	 * Sets the quantity.
	 *
	 * @param int $quantity The quantity
	 *
	 * @return self
	 */
	public function setQuantity($quantity)
	{
		$this->Quantity = $quantity;

		return $this;
	}

	/**
	 * Returns the unit price.
	 *
	 * @return float
	 */
	public function getUnitPrice()
	{
		return $this->UnitPrice;
	}

	/**
	 * Sets the unit price.
	 *
	 * @param float $unitPrice The unit price
	 *
	 * @return self
	 */
	public function setUnitPrice($unitPrice)
	{
		$this->UnitPrice = $unitPrice;

		return $this;
	}

	/**
	 * @return Weight
	 */
	public function getGrossWeight()
	{
		return $this->GrossWeight;
	}

	/**
	 * @param float $GrossWeight
	 *
	 */
	public function setGrossWeight($GrossWeight)
	{
		$this->GrossWeight = new Weight($GrossWeight);

		return $this;
	}

	/**
	 * @return Weight
	 */
	public function getNetWeight()
	{
		return $this->NetWeight;
	}

	/**
	 * @param float $NetWeight
	 *
	 */
	public function setNetWeight($NetWeight)
	{
		$this->NetWeight = new Weight($NetWeight);

		return $this;
	}

	/**
	 * @return string
	 */
	public function getQuantityUnitOfMeasurement()
	{
		return $this->QuantityUnitOfMeasurement;
	}

	/**
	 * @param string $QuantityUnitOfMeasurement
	 *
	 * @return ExportLineItem
	 */
	public function setQuantityUnitOfMeasurement($QuantityUnitOfMeasurement)
	{
		$this->QuantityUnitOfMeasurement = $QuantityUnitOfMeasurement;

		return $this;
	}

	/**
	 * @return int|null
	 */
	public function getCommodityCode()
	{
		return $this->CommodityCode;
	}

	/**
	 * @param int|null $CommodityCode
	 *
	 * @return ExportLineItem
	 */
	public function setCommodityCode($CommodityCode)
	{
		$this->CommodityCode = $CommodityCode;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getItemNumber()
	{
		return $this->ItemNumber;
	}

	/**
	 * @param int $ItemNumber
	 *
	 * @return ExportLineItem
	 */
	public function setItemNumber($ItemNumber)
	{
		$this->ItemNumber = $ItemNumber;

		return $this;
	}
}