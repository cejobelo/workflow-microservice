<?php
namespace Hamtaraw\Microservice\Workflow\Command;

/**
 * Create a new component to your Hamtaraw application.
 *
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class CreateComponent extends AbstractWorkflowCommand
{
    /**
     * @inheritDoc
     * @see AbstractControllerWorkflowCommand::getSrcTarget()
     */
    public static function getSrcTarget()
    {
        return 'Component/Custom';
    }

    /**
     * @inheritDoc
     * @see AbstractControllerWorkflowCommand::getTemplates()
     */
    public static function getTemplates()
    {
        return [
            'Component/js.template',
            'Component/php.template',
            'Component/sass.template',
            'Component/twig.template',
        ];
    }
}