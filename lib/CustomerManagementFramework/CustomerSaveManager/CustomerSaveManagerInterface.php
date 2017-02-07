<?php
/**
 * Created by PhpStorm.
 * User: mmoser
 * Date: 17.11.2016
 * Time: 11:10
 */

namespace CustomerManagementFramework\CustomerSaveManager;

use CustomerManagementFramework\Model\CustomerInterface;
use Psr\Log\LoggerInterface;

interface CustomerSaveManagerInterface
{

    public function __construct(LoggerInterface $logger);

    public function preAdd(CustomerInterface $customer);

    public function preUpdate(CustomerInterface $customer);

    public function postUpdate(CustomerInterface $customer);

    public function setSegmentBuildingHookEnabled($segmentBuildingHookEnabled);

    public function getSegmentBuildingHookEnabled();

    public function getCustomerSaveValidatorEnabled();

    /**
     * @param bool $customerSaveValidatorEnabled
     */
    public function setCustomerSaveValidatorEnabled($customerSaveValidatorEnabled);

    public function applySaveHandlers(CustomerInterface $customer);

    public function validateOnSave(CustomerInterface $customer, $withDuplicatesCheck = true);
}