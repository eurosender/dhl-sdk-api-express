<?php

namespace Dhl\Express\Model\Request;

use Dhl\Express\Api\Data\Request\ExportLineItemInterface;
use Dhl\Express\Api\Data\Request\InternationalDetailInterface;

/**
 * International detail.
 *
 * @api
 * @author   Marko Slavec <marko.slavec@eurosender.com>
 * @link     https://eurosender.com
 */
class InternationalDetail implements InternationalDetailInterface
{

	/**
	 * @var string
	 */
	private $invoiceNumber;

	/**
	 * Date format Y-m-d
	 *
	 * @var string
	 */
	private $invoiceDate;

	/**
	 * @var string
	 */
	private $exportReasonType;

	/**
	 * 3 letter country code for the place of delivery
	 *
	 * @var string
	 */
	private $placeOfIncoterm;

	/**
	 * @var string|null
	 */
	private $recepientReference;

	/**
	 * @var ExportLineItem[]
	 */
	private $exportLineItems;

	/**
	 * InternationalDetail constructor.
	 *
	 * @param string           $invoiceNumber
	 * @param string           $invoiceDate
	 * @param string           $exportReasonType
	 * @param string           $placeOfIncoterm
	 * @param string|null      $recepientReference
	 * @param ExportLineItem[] $exportLineItems
	 */
	public function __construct(
		$invoiceNumber,
		$invoiceDate,
		$exportReasonType,
		$placeOfIncoterm,
		$recepientReference,
		$exportLineItems
	) {
		$this->invoiceNumber = $invoiceNumber;
		$this->invoiceDate = $invoiceDate;
		$this->exportReasonType = $exportReasonType;
		$this->placeOfIncoterm = $placeOfIncoterm;
		$this->recepientReference = $recepientReference;
		$this->exportLineItems = $exportLineItems;
	}

	/**
	 * @return string
	 */
	public function getInvoiceNumber()
	{
		return $this->invoiceNumber;
	}

	/**
	 * @return string
	 */
	public function getInvoiceDate()
	{
		return $this->invoiceDate;
	}

	/**
	 * @return string
	 */
	public function getExportReasonType()
	{
		return $this->exportReasonType;
	}

	/**
	 * @return string
	 */
	public function getPlaceOfIncoterm()
	{
		return $this->placeOfIncoterm;
	}

	/**
	 * @return string|null
	 */
	public function getRecepientReference()
	{
		return $this->recepientReference;
	}

	/**
	 * @return ExportLineItemInterface[]
	 */
	public function getExportLineItems()
	{
		return $this->exportLineItems;
	}
}