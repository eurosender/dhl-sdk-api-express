<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Request\Shipment;

use Dhl\Express\Api\Data\Request\Shipment\ShipperInterface;

/**
 * Shipper.
 *
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Shipper implements ShipperInterface
{
    /**
     * The country code.
     *
     * @var string
     */
    private $countryCode;

    /**
     * The postal code.
     *
     * @var string
     */
    private $postalCode;

    /**
     * The city name.
     *
     * @var string
     */
    private $city;

    /**
     * The street lines.
     *
     * @var string[]
     */
    private $streetLines;

    /**
     * The name.
     *
     * @var string
     */
    private $name;

    /**
     * The company.
     *
     * @var string
     */
    private $company;

    /**
     * The phone number.
     *
     * @var string
     */
    private $phone;

    /**
     * The email.
     *
     * @var string|null
     */
    private $email;

	/**
	 * @var string|null
	 */
	private $stateOrProvince;

    /**
     * Shipper constructor.
     *
     * @param string $countryCode
     * @param string $postalCode
     * @param string $city
     * @param string[] $streetLines
     * @param string $name
     * @param string $company
     * @param string $phone
     * @param string|null $email
     * @param string|null $stateOrProvince
     */
    public function __construct(
        $countryCode,
        $postalCode,
        $city,
        array $streetLines,
        $name,
        $company,
        $phone,
        $email = null,
        $stateOrProvince = null
    ) {
        $this->countryCode = $countryCode;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->streetLines = $streetLines;
        $this->name = $name;
        $this->company = $company;
        $this->phone = $phone;
        $this->email = $email;
	    $this->stateOrProvince = $stateOrProvince;
    }

    public function getCountryCode()
    {
        return (string) $this->countryCode;
    }

    public function getPostalCode()
    {
        return (string) $this->postalCode;
    }

    public function getCity()
    {
        return (string) $this->city;
    }

    public function getStreetLines()
    {
        return $this->streetLines;
    }

    public function getName()
    {
        return (string) $this->name;
    }

    public function getCompany()
    {
        return (string) $this->company;
    }

    public function getPhone()
    {
        return (string) $this->phone;
    }

    public function getEmail()
    {
        return (string) $this->email;
    }

	public function getStateOrProvince()
	{
		return (string) $this->stateOrProvince;
	}
}
