<?php
namespace Hamtaraw\Microservice\Workflow\Command;

/**
 * Create a new page to your Hamtaraw application.
 *
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class CreatePage extends AbstractWorkflowCommand
{
    /**
     * @inheritDoc
     * @see AbstractControllerWorkflowCommand::getSrcTarget()
     */
    public static function getSrcTarget()
    {
        return 'Component/Page';
    }

    /**
     * @inheritDoc
     * @see AbstractControllerWorkflowCommand::getTemplates()
     */
    public static function getTemplates()
    {
        return [
            'Page/js.template',
            'Page/php.template',
            'Page/sass.template',
            'Page/twig.template',
        ];
    }
}