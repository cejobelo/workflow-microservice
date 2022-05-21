<?php
namespace Hamtaraw\Microservice\Workflow\Component\Form\CreateEvent;

use Exception;
use Hamtaraw\Component\AbstractForm;
use Hamtaraw\Middleware\InputConfig;

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class CreateEvent extends AbstractForm
{
    /**
     * @inheritDoc
     * @see AbstractForm::InputConfigs()
     */
    public function InputConfigs()
    {
        return [
            new InputConfig('ctrl_controller', 'string', true),
        ];
    }

    /**
     * @inheritDoc
     * @throws Exception
     * @see AbstractForm::executeAndGetResponse()
     */
    public function executeAndGetResponse()
    {
        $this->Modules->Workflow()->createController(
            $this->aInputs['ctrl_controller'],
            \Hamtaraw\Command\CreateEvent::getSrcTarget(),
            \Hamtaraw\Command\CreateEvent::getTemplates()
        );

        return $this->Modules->Response()->getSuccess("Your event has been created");
    }
}