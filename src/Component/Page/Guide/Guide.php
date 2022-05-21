<?php
namespace Hamtaraw\Microservice\Workflow\Component\Page\Guide;

use Hamtaraw\Component\AbstractPage;
use Hamtaraw\Url;

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class Guide extends AbstractPage
{
    /**
     * @inheritDoc
     * @see AbstractPage::Urls()
     */
    public function Urls()
    {
        return [
            new Url('/workflow-guide'),
        ];
    }

    /**
     * @inheritDoc
     * @see AbstractPage::process()
     */
    public function process()
    {
        $this->Modules->Head()->setTitle("Guide page");

        $this->aView['readme'] = "In progress.";
    }
}