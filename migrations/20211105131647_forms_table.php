<?php
declare(strict_types=1);

use ByTIC\ProfileLinks\Utility\FormsBuilderModels;
use ByTIC\ProfileLinks\Utility\PackageConfig;
use Phinx\Migration\AbstractMigration;

/**
 *
 */
final class FormsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $table_name = PackageConfig::tableName(FormsBuilderModels::LINKS);
        $exists = $this->hasTable($table_name);
        if ($exists) {
            return;
        }

        $table = $this->table($table_name);
        $table
            ->addColumn('subject', 'string')
            ->addColumn('subject_id', 'integer')
            ->addColumn('url', 'string')
            ->addColumn('type', 'string')
            ->addColumn('modified', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'update' => 'CURRENT_TIMESTAMP',
            ])
            ->addColumn('created', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
            ]);

        $table->addIndex(['tenant']);
        $table->addIndex(['tenant_id']);

        $table->save();
    }
}
