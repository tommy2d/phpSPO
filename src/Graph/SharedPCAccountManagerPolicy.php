<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:10:14+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientValueObject;
class SharedPCAccountManagerPolicy extends ClientValueObject
{
    /**
     * @var integer
     */
    public $CacheAccountsAboveDiskFreePercentage;
    /**
     * @var integer
     */
    public $InactiveThresholdDays;
    /**
     * @var integer
     */
    public $RemoveAccountsBelowDiskFreePercentage;
}