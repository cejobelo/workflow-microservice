<?php
namespace Hamtaraw\Microservice\Workflow\Component\Form\CreateForm;

use Exception;
use Hamtaraw\Component\AbstractForm;
use Hamtaraw\Middleware\InputConfig;

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class CreateForm extends AbstractForm
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
            \Hamtaraw\Command\CreateForm::getSrcTarget(),
            \Hamtaraw\Command\CreateForm::getTemplates()
        );

        return $this->Modules->Response()->getSuccess("Your form has been created");
    }
}