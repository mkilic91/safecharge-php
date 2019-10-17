<?php


namespace SafeCharge\Api\Service;

use SafeCharge\Api\Exception\ConfigurationException;
use SafeCharge\Api\RestClient;

/**
 * Class WithdrawService
 * @package SafeCharge\Api\Service
 */
class WithdrawService extends BaseService
{
    /**
     * PaymentService constructor.
     * @param RestClient $client
     * @throws ConfigurationException
     */
    public function __construct(RestClient $client)
    {
        parent::__construct($client);
        $this->apiUrl = $this->client->getWithdraralUrl();
    }

}