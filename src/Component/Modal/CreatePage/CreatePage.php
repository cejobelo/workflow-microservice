<?php
namespace App\Controller\Modal\CreatePage;

use Hamtaraw\Component\AbstractModal;

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class CreatePage extends AbstractModal
{
    /**
     * @inheritDoc
     * @see AbstractModal::getTitle()
     */
    public function getTitle()
    {
        return 'Create a page';
    }
}