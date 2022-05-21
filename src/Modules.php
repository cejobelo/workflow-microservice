<?php
namespace Hamtaraw\Microservice\Workflow;

use Hamtaraw\Module\AbstractModule;
use Hamtaraw\Ms\Workflow\Module\Create;

/**
 * Modules.
 * Each of them manages a complex part common to all Hamtaraw applications.
 * You can override a module by creating it in src/Module, Hamtaraw will find it.
 *
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class Modules extends \Hamtaraw\Modules
{
    /**
     * Returns the Ui module instance.
     *
     * @return Create|AbstractModule
     */
    public function Create()
    {
        return $this->getModuleInstance('Create');
    }
}