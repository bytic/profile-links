<?php

declare(strict_types=1);

use ByTIC\ProfileLinks\Utility\PackageConfig;
use ByTIC\ProfileLinks\Utility\ProfileLinksModels;
use Phinx\Migration\AbstractMigration;

/**
 *
 */
final class ClicksLogsTable extends AbstractMigration
{
    public function change(): void
    {
        $table_name = PackageConfig::tableName(ProfileLinksModels::CLICKS_LOGS);
        $exists = $this->hasTable($table_name);
        if ($exists) {
            return;
        }

        $table = $this->table($table_name);
        $table
            ->addColumn('url', 'string')
            ->addColumn('referer', 'string', ['null' => true, 'default' => null])
            ->addColumn('useragent', 'string', ['null' => true, 'default' => null])
            ->addColumn('ip', 'string', ['limit' => 45, 'null' => true, 'default' => null])
            ->addColumn('created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
            ]);

        $table->addIndex(['url']);

        $table->save();
    }
}
