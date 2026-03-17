<?php

declare(strict_types=1);

use ByTIC\ProfileLinks\Utility\PackageConfig;
use ByTIC\ProfileLinks\Utility\ProfileLinksModels;
use Phinx\Migration\AbstractMigration;

/**
 *
 */
final class ClicksStatsTable extends AbstractMigration
{
    public function change(): void
    {
        $table_name = PackageConfig::tableName(ProfileLinksModels::CLICKS_STATS);
        $exists = $this->hasTable($table_name);
        if ($exists) {
            return;
        }

        $table = $this->table($table_name, ['id' => false, 'primary_key' => ['id']]);
        $table
            ->addColumn('id', 'biginteger', ['identity' => true, 'signed' => false])
            ->addColumn('url', 'string')
            ->addColumn('referer', 'string', ['null' => true, 'default' => null])
            ->addColumn('date', 'date')
            ->addColumn('clicks', 'integer', ['default' => 0]);

        $table->addIndex(['url']);
        $table->addIndex(['date']);
        $table->addIndex(['url', 'referer', 'date'], ['unique' => true]);

        $table->save();
    }
}
