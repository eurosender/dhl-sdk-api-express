<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * TrackingRequestBase class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class TrackingRequestBase
{
    /**
     * @var TrackingRequest
     */
    protected $TrackingRequest;

    /**
     * @param TrackingRequest $TrackingRequest
     */
    public function __construct(TrackingRequest $TrackingRequest)
    {
      $this->TrackingRequest = $TrackingRequest;
    }

    /**
     * @return TrackingRequest
     */
    public function getTrackingRequest(): TrackingRequest
    {
      return $this->TrackingRequest;
    }

    /**
     * @param TrackingRequest $TrackingRequest
     * @return self
     */
    public function setTrackingRequest(TrackingRequest $TrackingRequest): self
    {
      $this->TrackingRequest = $TrackingRequest;
      return $this;
    }
}
