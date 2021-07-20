<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\ExportLineItems;

use Dhl\Express\Webservice\Soap\ValueInterface;

class Weight implements ValueInterface
{
	/**
	 * The value.
	 *
	 * @var float
	 */
	private $value;

	/**
	 * Constructor.
	 *
	 * @param float $value The value
	 */
	public function __construct($value)
	{
		$this->value = $value;
	}

	/**
	 * Returns the value as string.
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->value;
	}
}
