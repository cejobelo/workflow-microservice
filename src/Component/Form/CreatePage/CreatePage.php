<?php
namespace Hamtaraw\Microservice\Workflow\Component\Form\CreatePage;

use Exception;
use Hamtaraw\Component\AbstractForm;
use Hamtaraw\Middleware\InputConfig;

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class CreatePage extends AbstractForm
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
            \Hamtaraw\Microservice\Workflow\Command\CreatePage::getSrcTarget(),
            \Hamtaraw\Microservice\Workflow\Command\CreatePage::getTemplates()
        );

        return $this->Modules->Response()->getSuccess("Your page has been created");
    }
}