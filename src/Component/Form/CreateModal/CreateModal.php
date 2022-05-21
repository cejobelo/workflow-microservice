<?php
namespace Hamtaraw\Microservice\Workflow\Component\Form\CreateModal;

use Exception;
use Hamtaraw\Component\AbstractForm;
use Hamtaraw\Middleware\InputConfig;

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class CreateModal extends AbstractForm
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
            \Hamtaraw\Command\CreateModal::getSrcTarget(),
            \Hamtaraw\Command\CreateModal::getTemplates()
        );

        return $this->Modules->Response()->getSuccess("Your modal has been created");
    }
}