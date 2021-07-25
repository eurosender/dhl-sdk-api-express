<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail;

use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\ExportLineItems;

class ExportDeclaration
{
	/**
	 * @var string|null
	 */
	private $InvoiceNumber;

	/**
	 * @var string|null
	 */
	private $InvoiceDate;

	/**
	 * @var string|null
	 */
	private $ExportReasonType;

	/**
	 * @var string|null
	 */
	private $ExportReason;

	/**
	 * @var string|null
	 */
	private $PlaceOfIncoterm;

	/**
	 * @var ExportLineItems
	 */
	private $ExportLineItems;

	/**
	 * @return string|null
	 */
	public function getInvoiceNumber()
	{
		return $this->InvoiceNumber;
	}

	/**
	 * @param string|null $InvoiceNumber
	 *
	 * @return ExportDeclaration
	 */
	public function setInvoiceNumber($InvoiceNumber)
	{
		$this->InvoiceNumber = $InvoiceNumber;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getInvoiceDate()
	{
		return $this->InvoiceDate;
	}

	/**
	 * @param string|null $InvoiceDate
	 *
	 * @return ExportDeclaration
	 */
	public function setInvoiceDate($InvoiceDate)
	{
		$this->InvoiceDate = $InvoiceDate;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getExportReasonType()
	{
		return $this->ExportReasonType;
	}

	/**
	 * @param string|null $ExportReasonType
	 *
	 * @return ExportDeclaration
	 */
	public function setExportReasonType($ExportReasonType)
	{
		$this->ExportReasonType = $ExportReasonType;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getPlaceOfIncoterm()
	{
		return $this->PlaceOfIncoterm;
	}

	/**
	 * @param string|null $PlaceOfIncoterm
	 *
	 * @return ExportDeclaration
	 */
	public function setPlaceOfIncoterm($PlaceOfIncoterm)
	{
		$this->PlaceOfIncoterm = $PlaceOfIncoterm;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getExportReason()
	{
		return $this->ExportReason;
	}

	/**
	 * @param string|null $ExportReason
	 *
	 * @return ExportDeclaration
	 */
	public function setExportReason($ExportReason)
	{
		$this->ExportReason = $ExportReason;

		return $this;
	}

	/**
	 * @return ExportLineItems
	 */
	public function getExportLineItems()
	{
		return $this->ExportLineItems;
	}

	/**
	 * @param ExportLineItems $ExportLineItems
	 *
	 * @return ExportDeclaration
	 */
	public function setExportLineItems($ExportLineItems)
	{
		$this->ExportLineItems = $ExportLineItems;

		return $this;
	}

}