<?php

use ByTIC\ProfileLinks\Links\Models\ProfileLink;

/** @var ProfileLink[] $items */
$items = $items ?? $this->get('profile_links');
?>

<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
        <th>
            <?= translator()->trans('name'); ?>
        </th>
        <th>
            <?= translator()->trans('type'); ?>
        </th>
        <th>
            <?= translator()->trans('link'); ?>
        </th>
        <th>
        </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($items as $item): ?>
        <?php
        $url = $item->getURL();
        ?>
        <tr>
            <td>
                <?= $item->getName(); ?>
            </td>
            <td>
                <?= $item->getType()->getLabelHTML(); ?>
            </td>
            <td>
                <?= $item->getExternalUrl(); ?>
            </td>
            <td>
                <a href="<?php echo $url; ?>" class="btn btn-xs btn-info">
                    <i class="far fa-edit"></i>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

