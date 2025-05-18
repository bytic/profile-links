<?php

namespace ByTIC\ProfileLinks\Bundle\Admin\Controllers;

use ByTIC\ProfileLinks\Bundle\Admin\Forms\ProfileLinks\DetailsForm;
use ByTIC\ProfileLinks\Links\Models\ProfileLink;
use ByTIC\ProfileLinks\Utility\ProfileLinksModels;
use Nip\Records\Locator\ModelLocator;

/**
 *
 */
trait ProfileLinksControllerTrait
{
    use AbstractControllerTrait;

    public function addNewModel(): \Nip\Records\AbstractModels\Record
    {
        /** @var ProfileLink $item */
        $item = parent::addNewModel();

        $subjectRepository = ModelLocator::get($this->getRequest()->get('subject'));
        $subject = $subjectRepository->findOne($this->getRequest()->get('subject_id'));

        $item->setSubjectRecord($subject);

        return $item;
    }

//    public function view()
//    {
//        /** @var ProfileLink $item */
//        $item = $this->initExistingItem();
//
//        $this->payload()->with([
//            'item' => $item,
//        ]);
//    }

    protected function generateModelName(): string
    {
        return get_class(ProfileLinksModels::links());
    }

    /**
     * @param ProfileLink $item
     */
    protected function checkItemAccess($item)
    {
//        $method = $this->getRequest()->getMethod();
//        $this->checkAndSetForeignModelInRequest($method);

        $subject = $item->getProfileSubject();
        $this->checkAndSetForeignModelInRequest($subject);

        $this->setAfterUrlFlash(
            $subject->getURL(),
            $subject->getManager()->getController(),
            ['after-add', 'after-edit', 'after-delete']
        );
        return parent::checkItemAccess($item);
    }

    protected function getModelFormClass($model, $action = null): string
    {
        return DetailsForm::class;
    }
}
