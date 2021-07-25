<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration;

use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\ExportLineItems\ExportLineItem;

class ExportLineItems
{
	/**
	 * @var ExportLineItem[]
	 */
	private $ExportLineItem;

	/**
	 * ExportLineItems constructor.
	 *
	 * @param ExportLineItem[] $exportLineItems
	 */
	public function __construct($exportLineItems)
	{
		$this->ExportLineItem = $exportLineItems;
	}

	/**
	 * @return ExportLineItem[]
	 */
	public function getExportLineItems()
	{
		return $this->ExportLineItem;
	}

	/**
	 * @param ExportLineItem[] $ExportLineItems
	 *
	 * @return ExportLineItems
	 */
	public function setExportLineItems($ExportLineItems)
	{
		$this->ExportLineItem = $ExportLineItems;

		return $this;
	}

}