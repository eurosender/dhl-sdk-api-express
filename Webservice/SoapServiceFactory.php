<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice;

use Dhl\Express\Api\PickupServiceInterface;
use Dhl\Express\Api\RateServiceInterface;
use Dhl\Express\Api\ServiceFactoryInterface;
use Dhl\Express\Api\ShipmentServiceInterface;
use Dhl\Express\Api\TrackingServiceInterface;
use Dhl\Express\Webservice\Soap\RateServiceAdapter;
use Dhl\Express\Webservice\Soap\SoapClientFactory;
use Psr\Log\LoggerInterface;

/**
 * SOAP Service Factory.
 *
 * Instantiate a service object that connects to the API via SOAP.
 *
 * @package  Dhl\Express\Webservice
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class SoapServiceFactory implements ServiceFactoryInterface
{
    /**
     * @param string $username
     * @param string $password
     * @param LoggerInterface $logger
     * @return RateServiceInterface
     */
    public function createRateService(
        string $username,
        string $password,
        LoggerInterface $logger
    ): RateServiceInterface
    {
        $clientFactory = new SoapClientFactory();
        $client = $clientFactory->create($username, $password);
        $adapter = new RateServiceAdapter($client);

        return new RateService($adapter, $logger);
    }

    /**
     * @param string $username
     * @param string $password
     * @param LoggerInterface $logger
     * @return ShipmentServiceInterface
     */
    public function createShipmentService(
        string $username,
        string $password,
        LoggerInterface $logger
    ): ShipmentServiceInterface
    {
        $clientFactory = new SoapClientFactory();
        $client = $clientFactory->create($username, $password);
        $adapter = new ShipmentServiceAdapter($client);

        return new ShipmentService($adapter, $logger);
    }

    /**
     * @throws \Exception
     */
    public function createTrackingService()
    {
        throw new \Exception('Not yet implemented.');
    }

    /**
     * @throws \Exception
     */
    public function createPickupService()
    {
        throw new \Exception('Not yet implemented.');
    }
}