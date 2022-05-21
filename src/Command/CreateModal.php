<?php
namespace Hamtaraw\Microservice\Workflow\Command;

/**
 * Create a new modal to your Hamtaraw application.
 *
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class CreateModal extends AbstractWorkflowCommand
{
    /**
     * @inheritDoc
     * @see AbstractControllerWorkflowCommand::getSrcTarget()
     */
    public static function getSrcTarget()
    {
        return 'Component/Modala';
    }

    /**
     * @inheritDoc
     * @see AbstractControllerWorkflowCommand::getTemplates()
     */
    public static function getTemplates()
    {
        return [
            'Modala/js.template',
            'Modala/php.template',
            'Modala/sass.template',
            'Modala/twig.template',
        ];
    }
}