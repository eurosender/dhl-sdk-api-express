<?php

namespace Dhl\Express\Api\Data\Request;

interface ExportLineItemInterface
{
	/**
	 * @return float
	 */
	public function getGrossWeight();

	/**
	 * @return string
	 */
	public function getManufacturingCountryCode();

	/**
	 * @return string
	 */
	public function getQuantityUnitOfMeasurement();

	/**
	 * @return string|null
	 */
	public function getCommodityCode();

	/**
	 * @return int
	 */
	public function getQuantity();

	/**
	 * @return float
	 */
	public function getUnitPrice();

	/**
	 * @return string
	 */
	public function getItemDescription();

	/**
	 * @return int
	 */
	public function getItemNumber();

	/**
	 * @return float
	 */
	public function getNetWeight();
}