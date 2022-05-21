<?php
namespace Hamtaraw\Microservice\Workflow\Command;

use Composer\Script\Event;
use Exception;
use Hamtaraw\Command\AbstractCommand;
use Hamtaraw\Command\ArgumentConfig;
use Hamtaraw\Microservice\Workflow\Workflow;

/**
 * Create controller files with templates for improve your workflow.
 *
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
abstract class AbstractWorkflowCommand extends AbstractCommand
{
    /**
     * Returns the src target.
     * Example : will return Event for src/Event.
     *
     * @return string
     * @throws Exception
     */
    static public function getSrcTarget()
    {
        throw new Exception("Implement " . __METHOD__);
    }

    /**
     * Returns the template paths.
     *
     * @return string[]
     * @throws Exception
     */
    public static function getTemplates()
    {
        throw new Exception("Implement " . __METHOD__);
    }

    /**
     * @inheritDoc
     * @see AbstractCommand::ArgumentConfigs()
     */
    public static function ArgumentConfigs()
    {
        return [
            new ArgumentConfig('#1', 'string', true, "the Ctrl"),
        ];
    }

    /**
     * @inheritDoc
     * @throws Exception
     * @see AbstractCommand::run()
     */
    public static function run(Event $Event)
    {
        $aArguments = static::checkArguments($Event->getArguments());
        (new \Hamtaraw\Microservice\Workflow\Modules(Workflow::startMicroservice()))
            ->Create()
            ->controller($aArguments['#1'], static::getSrcTarget(), static::getTemplates());
    }
}