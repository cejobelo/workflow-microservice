<?php
namespace Hamtaraw\Microservice\Workflow\Command;

/**
 * Create a new form to your Hamtaraw application.
 *
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class CreateForm extends AbstractWorkflowCommand
{
    /**
     * @inheritDoc
     * @see AbstractControllerWorkflowCommand::getSrcTarget()
     */
    public static function getSrcTarget()
    {
        return 'Component/Form';
    }

    /**
     * @inheritDoc
     * @see AbstractControllerWorkflowCommand::getTemplates()
     */
    public static function getTemplates()
    {
        return [
            'Form/js.template',
            'Form/php.template',
            'Form/sass.template',
            'Form/twig.template',
        ];
    }
}