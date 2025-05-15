<?php

use ByTIC\ProfileLinks\Links\Models\ProfileLink;

/** @var ProfileLink[] $items */
$items = $items ?? $this->get('profile_links');
?>

<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
        <th>
            <?= translator()->trans('link'); ?>
        </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($items as $item): ?>
        <tr>
            <td>
                <?= $item->getExternalUrl(); ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

