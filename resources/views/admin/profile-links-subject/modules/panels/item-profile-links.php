<?php

use ByTIC\AdminBase\Screen\Actions\Dto\ButtonAction;
use ByTIC\AdminBase\Widgets\Cards\Card;
use ByTIC\Icons\Icons;
use ByTIC\ProfileLinks\Utility\ProfileLinksModels;

$items = $this->get('profile_links');
$subject = $this->get('item');

$card = Card::make()
    ->withView($this)
    ->withTitle(ProfileLinksModels::links()->getLabel('title'))
    ->withIcon(Icons::list_ul())
    ->addHeaderTool(
        ButtonAction::make()
            ->setUrl(ProfileLinksModels::links()->compileURL(
                'add',
                ['subject_id' => $subject->id, 'subject' => $subject->getManager()->getMorphName()]
            ))
            ->addHtmlClass('btn-xs')
            ->setLabel(translator()->trans('add'))
    )
    ->wrapBody(false)
    ->withViewContent(
        '/profile-links/modules/lists/subscription',
        ['items' => $items]
    );
?>
<?= $card ?>