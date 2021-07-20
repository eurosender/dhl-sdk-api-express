<?php

namespace Dhl\Express\Api\Data\Request;

/**
 * International detail interface.
 *
 * @api
 * @author   Marko Slavec <marko.slavec@eurosender.com>
 * @link     https://eurosender.com
 */
interface InternationalDetailInterface
{
	/**
	 * @return string
	 */
	public function getInvoiceNumber();

	/**
	 * @return string
	 */
	public function getInvoiceDate();

	/**
	 * @return string
	 */
	public function getExportReasonType();

	/**
	 * @return string
	 */
	public function getPlaceOfIncoterm();

	/**
	 * @return string|null
	 */
	public function getRecepientReference();

	/**
	 * @return ExportLineItem[]
	 */
	public function getExportLineItems();
}