<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship;

/**
 * The contact info section.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class BuyerContactInfo
{
    /**
     * The contact.
     *
     * @var Contact
     */
    private $Contact;

    /**
     * The address.
     *
     * @var BuyerAddress
     */
    private $Address;

    /**
     * Constructor.
     *
     * @param Contact $contact The buyer contact
     * @param BuyerAddress $address The buyer address
     */
    public function __construct(Contact $contact, BuyerAddress $address)
    {
        $this->setContact($contact)
            ->setAddress($address);
    }

    /**
     * Returns the buyer contact.
     *
     * @return Contact
     */
    public function getContact()
    {
        return $this->Contact;
    }

    /**
     * Sets the buyer contact.
     *
     * @param Contact $contact The contact.
     *
     * @return self
     */
    public function setContact(Contact $contact)
    {
        $this->Contact = $contact;

        return $this;
    }

    /**
     * Returns the buyer address.
     *
     * @return BuyerAddress
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * Sets the buyer  address.
     *
     * @param BuyerAddress $address The buyer address
     *
     * @return self
     */
    public function setAddress(BuyerAddress $address)
    {
        $this->Address = $address;

        return $this;
    }
}
