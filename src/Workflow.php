<?php
namespace Hamtaraw\Microservice\Workflow;

use Hamtaraw\AbstractMicroservice;
use Hamtaraw\Microservice\Workflow\Contributor\PhildyJocelynBelcou;

/**
 * Workflow microservice.
 *
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class Workflow extends AbstractMicroservice
{
    /**
     * @inheritDoc
     * @see AbstractMicroservice::getContributors()
     */
    public function getContributors()
    {
        return [
            new PhildyJocelynBelcou,
        ];
    }

    /**
     * @inheritDoc
     * @see AbstractMicroservice::getComponents()
     */
    public function getComponents()
    {
        return [
            # Custom components
            \Hamtaraw\Microservice\Workflow\Component\Custom\Header\Header::class,
            # Forms
            \Hamtaraw\Microservice\Workflow\Component\Form\CreateAjaxRequest\CreateAjaxRequest::class,
            \Hamtaraw\Microservice\Workflow\Component\Form\CreateComponent\CreateComponent::class,
            \Hamtaraw\Microservice\Workflow\Component\Form\CreateEvent\CreateEvent::class,
            \Hamtaraw\Microservice\Workflow\Component\Form\CreateForm\CreateForm::class,
            \Hamtaraw\Microservice\Workflow\Component\Form\CreateModal\CreateModal::class,
            \Hamtaraw\Microservice\Workflow\Component\Form\CreatePage\CreatePage::class,
            # Modals
            \Hamtaraw\Microservice\Workflow\Component\Form\CreateAjaxRequest\CreateAjaxRequest::class,
            \Hamtaraw\Microservice\Workflow\Component\Form\CreateComponent\CreateComponent::class,
            \Hamtaraw\Microservice\Workflow\Component\Form\CreateEvent\CreateEvent::class,
            \Hamtaraw\Microservice\Workflow\Component\Form\CreateForm\CreateForm::class,
            \Hamtaraw\Microservice\Workflow\Component\Form\CreateModal\CreateModal::class,
            \Hamtaraw\Microservice\Workflow\Component\Form\CreatePage\CreatePage::class,
            # Pages
            \Hamtaraw\Microservice\Workflow\Component\Page\Guide\Guide::class,
        ];
    }

    /**
     * @inheritDoc
     * @see AbstractMicroservice::getMiddlewares()
     */
    public function getMiddlewares()
    {
        return [];
    }
}