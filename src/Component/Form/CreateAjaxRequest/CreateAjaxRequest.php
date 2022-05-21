<?php
namespace Hamtaraw\Microservice\Workflow\Component\Form\CreateAjaxRequest;

use Exception;
use Hamtaraw\Component\AbstractForm;
use Hamtaraw\Middleware\InputConfig;

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class CreateAjaxRequest extends AbstractForm
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
        $this->Modules->Create()->controller(
            $this->aInputs['ctrl_controller'],
            \Hamtaraw\Microservice\Workflow\Command\CreateAjaxRequest::getSrcTarget(),
            \Hamtaraw\Microservice\Workflow\Command\CreateAjaxRequest::getTemplates()
        );

        return $this->Modules->Response()->getSuccess("Your ajax request has been created");
    }
}