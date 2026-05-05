<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Redirect\Registry\EventListener;

use DigitalMarketingFramework\Distributor\Redirect\DistributorRedirectInitialization;
use DigitalMarketingFramework\Typo3\Core\Registry\EventListener\AbstractCoreRegistryUpdateEventListener;

class CoreRegistryUpdateEventListener extends AbstractCoreRegistryUpdateEventListener
{
    public function __construct()
    {
        parent::__construct(new DistributorRedirectInitialization('dmf_distributor_redirect'));
    }
}
